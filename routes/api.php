<?php

use App\Http\Resources\ApplicationResource;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployerResource;
use App\Http\Resources\JobPostResource;
use App\Http\Resources\UserResource;
use App\Models\Application;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', function (Request $request) {
    return UserResource::collection(User::query()->where($request->query())->get());
});
Route::get('/users/{user}', function (User $user) {
    return new UserResource($user);
});

Route::get('/employees', function (Request $request) {
    return EmployeeResource::collection(Employee::query()->where($request->query())->get());
});
Route::get('/employees/{employee}', function (Employee $employee) {
    return new EmployeeResource($employee);
});

Route::get('/employers', function (Request $request) {
    return EmployerResource::collection(Employer::query()->where($request->query())->get());
});
Route::get('/employers/{employer}', function (Employer $employer) {
    return new EmployerResource($employer);
});

Route::get('/job-posts', function (Request $request) {
    return JobPostResource::collection(JobPost::query()->where($request->query())->get());
});
Route::get('/job-posts/{job_post}', function (JobPost $jobPost) {
    return new  JobPostResource($jobPost);
});

Route::get('/applications', function (Request $request) {
    return ApplicationResource::collection(Application::query()->where($request->query())->get());
});
Route::get('/applications/{application}', function (Application $application) {
    return new ApplicationResource($application);
});

