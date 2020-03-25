<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;

Route::get('/', 'Frontend\FrontEndController@index');

Route::group(['namespace' => 'Frontend'], function () {
    /**********************************Frontend************************************/
    Route::get('/front', 'FrontEndController@index')->name('frontend.home');
    Route::get('/front/chairman_message', 'FrontEndController@chairman_message')->name('frontend.chairman_message');
    Route::get('/front/md_message', 'FrontEndController@md_message')->name('frontend.md_message');
    Route::get('/front/aboutus', 'FrontEndController@aboutus')->name('frontend.aboutus');
    Route::get('/front/admission', 'FrontEndController@admission')->name('frontend.admission');
    Route::get('/front/facility', 'FrontEndController@facility')->name('frontend.facility');
    Route::get('/front/scholarship', 'FrontEndController@scholarship')->name('frontend.scholarship');
    Route::get('/front/contactus', 'FrontEndController@contactus')->name('frontend.contactus');
    Route::get('/front/admissionform', 'FrontEndController@admissionform')->name('frontend.admissionform');
    Route::post('front/contactus/enquiry', 'FrontEndController@enquiry')->name('frontend.enquiry');
    Route::post('front/admission/admissionform', 'FrontEndController@admissionform_store')->name('frontend.admissionform_store');
    Route::get('/front/gallery_category', 'FrontEndController@gallery_category')->name('frontend.gallery_category');
    Route::get('front/gallery/{id}', 'FrontEndController@gallery')->name('frontend.gallery');
    Route::get('/front/viewallevents', 'FrontEndController@viewallevents')->name('frontend.viewallevents');
    Route::get('/front/subject/{id}', 'FrontEndController@subject')->name('frontend.subject');
    Route::get('/front/program', 'FrontEndController@program')->name('frontend.program');
    Route::get('/front/blog', 'FrontEndController@blog')->name('frontend.blog');
    Route::get('/front/blog_details/{id}', 'FrontEndController@blog_details')->name('frontend.blog_details');
    Route::get('/front/vacancy', 'FrontEndController@vacancy')->name('frontend.vacancy');
    /**********************************Frontend************************************/
});


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Backend'], function () {
    /**********************************AboutUs************************************/

    Route::get('/aboutus', 'AboutUsController@getCreate')->name('get.aboutus.create');
    Route::post ('/aboutus', 'AboutUsController@postCreate')->name('post.aboutus.create');
    /**********************************AboutUs************************************/
    /**********************************LifeAtGUPS************************************/
    Route::get('/life_at_gups', 'LifeAtGUPSController@getCreate')->name('get.life_at_gups.create');
    Route::post('/life_at_gups', 'LifeAtGUPSController@postCreate')->name('post.life_at_gups.create');

    /**********************************LifeAtGUPS************************************/
    /**********************************Backend Dashboard************************************/
    Route::match(['get', 'post'], '/dashboard', function () {
        return view('dashboard');
    });
    /**********************************Backend Dashboard************************************/
    /**********************************Subject************************************/
    Route::resource('/course', 'CourseController')->except('destroy');
    Route::get('/course/delete/{id}', 'CourseController@destroy')->name('course.destroy');
    Route::resource('/course_description', 'CourseDescriptionController')->except('destroy');
    Route::get('/course_description/delete/{id}', 'CourseDescriptionController@destroy')->name('course_description.destroy');
    /**********************************Subject************************************/
    /*********************************Gallery*************************************/
    Route::resource('/gallery', 'GalleryController');
    Route::post('/removephoto', 'GalleryController@removephoto')->name('admin.removephoto');
    /**********************************Gallery************************************/
    /**********************************News And Events************************************/
    Route::resource('news_and_events', 'NewsAndEventsController')->except('destroy');
    Route::get('/news_and_events/delete/{id}', 'NewsAndEventsController@destroy')->name('news_and_events.destroy');
    Route::get('/news_and_events/trash/{id}', 'NewsAndEventsController@trash')->name('news_and_events.trash');
    Route::get('/news_and_event/pending', 'NewsAndEventsController@pending')->name('news_and_events.pending');
    Route::get('/news_and_event/publish/{id}', 'NewsAndEventsController@publish')->name('news_and_events.publish');
    /**********************************News And Events************************************/
    /**********************************Information************************************/
    Route::resource('information', 'InformationController')->except('edit', 'update');
    Route::get('/information/edit', 'InformationController@edit');
    Route::put('/information/update', 'InformationController@update')->name('information.update');
    /**********************************Information************************************/
    /**********************************WhatWeOffer************************************/
    Route::resource('whatWeOffer', 'WhatWeOfferController')->except('destroy');
    Route::get('/whatWeOffer/delete/{id}', 'WhatWeOfferController@destroy')->name('whatWeOffer.destroy');
    Route::get('/whatWeOffer/trash/{id}', 'WhatWeOfferController@trash')->name('whatWeOffer.trash');
    Route::get('/whatWeOffer/pending', 'WhatWeOfferController@pending')->name('whatWeOffer.pending');
    Route::get('/whatWeOffer/publish/{id}', 'WhatWeOfferController@publish')->name('whatWeOffer.publish');
    /**********************************WhatWeOffer************************************/
    /**********************************Notice************************************/
    Route::resource('notice', 'NoticeController')->except('destroy');
    Route::get('/notices/delete/{id}', 'NoticeController@destroy')->name('notices.destroy');
    Route::get('/notices/trash/{id}', 'NoticeController@trash')->name('notices.trash');
    Route::get('/notices/pending', 'NoticeController@pending')->name('notices.pending');
    Route::get('/notices/publish/{id}', 'NoticeController@publish')->name('notices.publish');
    /**********************************Notice************************************/
    /**********************************Enquiry************************************/
    Route::resource('enquiry', 'EnquiryController')->except('show', 'destroy');
    Route::get('enquiry/show/{id}', 'EnquiryController@show')->name('enquiry.show');
    Route::get('enquiry/delete/{id}', 'EnquiryController@destroy')->name('enquiry.destroy');
    /**********************************Enquiry************************************/
    /**********************************Admission Form************************************/
    Route::resource('admissionform', 'AdmissionFormController')->except('show', 'destroy');
    Route::get('admissionform/show/{id}', 'AdmissionFormController@show')->name('admissionform.show');
    Route::get('admissionform/delete/{id}', 'AdmissionFormController@destroy')->name('admissionform.destroy');
    /**********************************Admission Form************************************/
    /**********************************Setting************************************/
    Route::resource('setting', 'SettingController')->except('update');
    Route::post('/setting', 'SettingController@update')->name('setting.update');
    /**********************************Setting************************************/
    /**********************************Four Blocks************************************/
    Route::resource('fourblock', 'FourBlockController')->except('destroy');
    Route::get('fourblock/delete/{id}', 'FourBlockController@destroy')->name('fourblock.destroy');
    /**********************************Four Blocks************************************/
    /**********************************Apply For Admission************************************/
    Route::resource('apply_admission', 'ApplyAdmissionController')->except('destroy');
    Route::get('apply_admission/delete/{id}', 'ApplyAdmissionController@destroy')->name('apply_admission.destroy');
    Route::get('/apply_admission', 'ApplyAdmissionController@index')->name('apply_admission.index');
    Route::post('/apply_admission/update', 'ApplyAdmissionController@update')->name('apply_admission.update');
    /**********************************Apply For Admission************************************/
    /**********************************Slider************************************/
    Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::post('/slider/update', 'SliderController@update')->name('slider.update');
    /**********************************Slider************************************/
    /**********************************Vacancy************************************/
    Route::get('/vacancy', 'VacancyController@index')->name('vacancy.index');
    Route::post('/vacancy/update', 'VacancyController@update')->name('vacancy.update');
    /**********************************Vacancy************************************/
      /**********************************FooterDescription************************************/
      Route::get('/footer_description', 'FooterDescriptionController@getCreate')->name('get.footer_description.create');
      Route::post('/footer_description', 'FooterDescriptionController@postCreate')->name('post.footer_description.create');
      /**********************************FooterDescription************************************/
    /**********************************Semester or Program************************************/
    Route::resource('semester', 'SemesterController')->except('destroy');
    Route::get('semester/delete/{id}', 'SemesterController@destroy')->name('semester.destroy');
        Route::resource('blog', 'BlogController')->except('destroy');
    Route::get('/blogs/delete/{id}', 'BlogController@destroy')->name('blogs.destroy');
    Route::get('/blogs/trash/{id}', 'BlogController@trash')->name('blogs.trash');
    Route::get('/blogs/pending', 'BlogController@pending')->name('blogs.pending');
    Route::get('/blogs/publish/{id}', 'BlogController@publish')->name('blogs.publish');

    /**********************************Semester or Program************************************/
    Route::post('ckeditor/upload', 'VacancyController@upload')->name('ckeditor.upload');
    Route::post('/upload_image', function() {
        $CKEditor = Input::get('CKEditor');
        $funcNum = Input::get('CKEditorFuncNum');
        $message = $url = '';
        if (Input::hasFile('upload')) {
            $file = Input::file('upload');
            if ($file->isValid()) {
                $filename = $file->getClientOriginalName();
                $file->move(storage_path().'/images/', $filename);
                $url = public_path() .'/images/' . $filename;
            } else {
                $message = 'An error occured while uploading the file.';
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
    });
});


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);
