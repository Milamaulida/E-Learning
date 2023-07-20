<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudyPlanCardController;
use App\Http\Controllers\ClassStudyController;
use App\Http\Controllers\RectorateController;
use App\Http\Controllers\StudentsAssociationController;
use App\Models\Lecturer;
use App\Models\Rectorate;
use App\Models\StudentsAssociation;
use App\Models\StudyPlanCard;
use App\Models\Subject;
use App\Models\Timetable;
use App\Models\Ukm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lecturer',[LecturerController::class,'index']);
Route::get('/add-lecturer',[LecturerController::class,'create']);
Route::post('/lecturer/store',[LecturerController::class,'store']);
Route::get('/lecturer/{id}', [LecturerController::class,'edit']);
Route::patch('/lecturer/update/{id}', [LecturerController::class,'update']);
Route::get('/lecturer/delete/{id}', [LecturerController::class,'destroy']);

Route::get('/student',[StudentController::class,'index']);
Route::get('/add-student',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);
Route::get('/student/{id}', [StudentController::class,'edit']);
Route::patch('/student/update/{id}', [StudentController::class,'update']);
Route::get('/student/delete/{id}', [StudentController::class,'destroy']);


Route::get('/ukm',[UkmController::class,'index']);
Route::get('/add-ukm',[UkmController::class,'create']);
Route::post('/ukm/store',[UkmController::class,'store']);
Route::get('/ukm/{id}', [UkmController::class,'edit']);
Route::patch('/ukm/update/{id}', [UkmController::class,'update']);
Route::get('/ukm/delete/{id}', [UkmController::class,'destroy']);


Route::get('/major',[MajorController::class,'index']);
Route::get('/add-major',[MajorController::class,'create']);
Route::post('/major/store',[MajorController::class,'store']);
Route::get('/major/{id}', [MajorController::class,'edit']);
Route::patch('/major/update/{id}', [MajorController::class,'update']);
Route::get('/major/delete/{id}', [MajorController::class,'destroy']);


Route::get('/timetable',[TimetableController::class,'index']);
Route::get('/add-timetable',[TimetableController::class,'create']);
Route::post('/timetable/store',[TimetableController::class,'store']);
Route::get('/timetable/{id}', [TimetableController::class,'edit']);
Route::patch('/timetable/update/{id}', [TimetableController::class,'update']);
Route::get('/timetable/delete/{id}', [TimetableController::class,'destroy']);


Route::get('/mark',[MarkController::class,'index']);
Route::get('/add-mark',[MarkController::class,'create']);
Route::post('/mark/store',[MarkController::class,'store']);
Route::get('/mark/{id}', [MarkController::class,'edit']);
Route::patch('/mark/update/{id}', [MarkController::class,'update']);
Route::get('/mark/delete/{id}', [MarkController::class,'destroy']);


Route::get('/bill',[BillController::class,'index']); 
Route::get('/add-bill',[BillController::class,'create']);
Route::post('/bill/store',[BillController::class,'store']);
Route::get('/bill/{id}', [BillController::class,'edit']);
Route::patch('/bill/update/{id}', [BillController::class,'update']);
Route::get('/bill/delete/{id}',[BillController::class,'destroy']);

Route::get('/subject',[SubjectController::class,'index']);
Route::get('/add-subject',[SubjectController::class,'create']);
Route::post('/subject/store',[SubjectController::class,'store']);
Route::get('/subject/{id}', [SubjectController::class,'edit']);
Route::patch('/subject/update/{id}', [SubjectController::class,'update']);
Route::get('/subject/delete/{id}', [SubjectController::class,'destroy']);


Route::get('/studyplancard',[StudyPlanCardController::class,'index']);
Route::get('/add-studyplancard',[StudyPlanCardController::class,'create']);
Route::post('/studyplancard/store',[StudyPlanCardController::class,'store']);
Route::get('/studyplancard/{id}', [StudyPlanCardController::class,'edit']);
Route::patch('/studyplancard/update/{id}', [StudyPlanCardController::class,'update']);
Route::get('/studyplancard/delete/{id}', [StudyPlanCardController::class,'destroy']);


Route::get('/classstudy',[ClassStudyController::class,'index']);
Route::get('/add-classstudy',[ClassStudyController::class,'create']);
Route::post('/classstudy/store',[ClassStudyController::class,'store']);
Route::get('/classstudy/{id}', [ClassStudyController::class,'edit']);
Route::patch('/classstudy/update/{id}', [ClassStudyController::class,'update']);
Route::get('/classstudy/delete/{id}', [ClassStudyController::class,'destroy']);


Route::get('/rectorate',[RectorateController::class,'index']);
Route::get('/add-rectorate',[RectorateController::class,'create']);
Route::post('/rectorate/store',[RectorateController::class,'store']);
Route::get('/rectorate/{id}', [RectorateController::class,'edit']);
Route::patch('/rectorate/update/{id}', [RectorateController::class,'update']);
Route::get('/rectorate/delete/{id}', [RectorateController::class,'destroy']);


Route::get('/studentsassociation',[StudentsAssociationController::class,'index']);
Route::get('/add-studentsassociation',[StudentsAssociationController::class,'create']);
Route::post('/studentsassociation/store',[StudentsAssociationController::class,'store']);
Route::get('/studentsassociation/{id}', [StudentsAssociationController::class,'edit']);
Route::patch('/studentsassociation/update/{id}', [StudentsAssociationController::class,'update']);
Route::get('/studentsassociation/delete/{id}', [StudentsAssociationController::class,'destroy']);













