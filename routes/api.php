<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reserve/{traineeId}/{scheduleId}', function($traineeId, $scheduleId) {
   $schedule = \App\Schedule::with('branchCourse')->where('id', $scheduleId)->first();
   $user = \App\User::with('trainees')->where('id', $traineeId)->first();

    $reservation = \App\Reservation::create([
       'branch_id' => $schedule->branchCourse->branch_id,
       'trainee_id' => $user->trainees->first()->id,
       'schedule_id' => $scheduleId,
   ]);

    $reservationCode = \App\Branch::find($schedule->branchCourse->branch_id)->code . '0' . $traineeId . '-' . '052018-0'
        . count(\App\Reservation::where('branch_id', $schedule->branchCourse->branch_id)->get());

    $reservation->code = $reservationCode;
    $reservation->save();

    $user->notify(new \App\Notifications\ReservationSuccessful($reservation));

    $branchCourse = \App\BranchCourse::with('course')->where('course_id', $schedule->branchCourse->course_id)->first();

    $reservation->branch_name = $branchCourse->branch->name;
    $reservation->course_name = $branchCourse->course->name;
    $reservation->created = Carbon\Carbon::parse($reservation->created_at)->toFormattedDateString();
    $reservation->will_expire = Carbon\Carbon::parse($reservation->created_at)->addDay(1)->toFormattedDateString();

    return $reservation;
});

Route::get('/reservations/{userId}', function($userId) {
    $user = \App\User::with('trainees')->where('id', $userId)->first();
    $reservation = \App\Reservation::where('trainee_id', $user->trainees->first()->id)->first();
    $schedule = \App\Schedule::with('branchCourse')->where('id', $reservation->schedule_id)->first();
    $branchCourse = \App\BranchCourse::with('course')->where('course_id', $schedule->branchCourse->course_id)->first();

    $reservation->branch_name = $branchCourse->branch->name;
    $reservation->course_name = $branchCourse->course->name;
    $reservation->created = Carbon\Carbon::parse($reservation->created_at)->toFormattedDateString();
    $reservation->will_expire = Carbon\Carbon::parse($reservation->created_at)->addDay(1)->toFormattedDateString();

    return $reservation;
});
