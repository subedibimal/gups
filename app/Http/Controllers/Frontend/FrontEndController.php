<?php

namespace App\Http\Controllers\Frontend;
use App\Blog;
use App\Models\AboutUs;
use App\Models\AdmissionForm;
use App\Models\ApplyForAdmission;
use App\Models\Course;
use App\Models\Enquiry;
use App\Models\FourBlock;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Information;
use App\Models\NewsAndEvents;
use App\Models\Notice;
use App\Models\Semester;
use App\Models\Setting;
use App\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = NewsAndEvents::where('status', 1)->orderBy('date', 'DESC')->paginate(3);
        $events = NewsAndEvents::where('status', 1)->orderBy('created_at', 'DESC')->paginate(3);
        $notices = Notice::where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);
        $subjects = Course::all();
        $three_blocks = FourBlock::paginate(3);
        $apply_title = ApplyForAdmission::where('name', 'title')->first();
        $apply_subtitle = ApplyForAdmission::where('name', 'subtitle')->first();
        $apply_description = ApplyForAdmission::where('name', 'description')->first();
        $google_form_url = ApplyForAdmission::where('name', 'google_form_url')->first();


        return view('frontend.dashboard', compact('news', 'notices',
            'events', 'subjects', 'three_blocks', 'google_form_url',
            'apply_description', 'apply_subtitle', 'apply_title'));
    }
    public function vacancy(){
        $vacancy_title=Vacancy::where('name','title')->first();
        $vacancy_description=Vacancy::where('name','description')->first();
        return view('frontend.vacancy',compact('vacancy_description','vacancy_title'));
    }

    public function chairman_message()
    {
        return view('frontend.chairman_message');
    }

    public function md_message()
    {
        return view('frontend.md_message');
    }

    public function aboutus()
    {
        $aboutus = AboutUs::first();
        return view('frontend.include.aboutus', compact('aboutus'));
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }

    public function enquiry(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $input = $request->all();
        Enquiry::create($input);
        toastr()->success('Your Enquiry has been added successfully');
        return redirect()->back();
    }

    public function admissionform(){
        $from=get_school_info('admission_from');
        $to=get_school_info('admission_to');
        $date=date('m/d/Y');
        if (($date>=$from) && ($date<=$to)){
            return view('frontend.admissionform');
    }
        else{
            toastr()->info('Session has been closed. Please wait for new session');
            return redirect()->back();
        }
    }
    public function admissionform_store(Request $request)
    {
//        $this->validate($request,[
//            'full_name'=>'required',
//            // 'email'=>'required',
//            'gender'=>'required',
//            'nationality'=>'required',
//            'dob_ad'=>'required',
//            'dob_bs'=>'required',
//            // 'religion'=>'required',
//            // 'province'=>'required',
//            // 'zone'=>'required',
//            // 'district'=>'required',
//            // 'municipality'=>'required',
//            // 'ward'=>'required',
//            // 'village'=>'required',
//            'parent_name'=>'required',
//            // 'qualification'=>'required',
//            'home_no'=>'required',
//            'mobile_no'=>'required',
//            'office_no'=>'required',
//            // 'afu_symbol_no'=>'required',
//            // 'submission_no'=>'required',
//            // 'afu_entrance_score'=>'required',
//            // 'merit_no'=>'required',
//            // 'admission_seeking_level'=>'required',
//            // 'semester'=>'required',
//            // 'school'=>'required',
//            // 'level_1'=>'required',
//            'board_1'=>'required',
//            // 'institution_details_1'=>'required',
//            // 'passed_year_1'=>'required',
//            // 'percent_grade_1'=>'required',
//        ]);
        $input = $request->all();
        AdmissionForm::create($input);
        toastr()->success('You have applied successfully');
        return redirect()->back();

    }

    public function gallery(Request $request, $id)
    {
        $gal = Gallery::find($id);

        return view('frontend.gallery', compact('gal'));
    }

    public function gallery_category(Request $request)
    {
        $galleries = Gallery::all();
        return view('frontend.gallery_category', compact('galleries'));
    }

    public function viewallevents()
    {
        $events = NewsAndEvents::orderBy('date', 'ASC')->get();

        $ev = $events->groupBy(function ($item) {
            $da = change_date_format($item->date);
            $updated_date = Carbon::createFromFormat('Y-m-d', $da)->format('M,Y');

            return $updated_date;
        })->toArray();

        return view('frontend.viewallevents', compact('ev'));
    }

    public function subject($id)
    {
        $subject = Course::find($id);
        return view('frontend.subject', compact('subject'));
    }

    public function program()
    {
        $programs = Semester::all();
        return view('frontend.program', compact('programs'));
    }

    public function admission()
    {
        return view('frontend.admissionform');
        // return view('frontend.admission');

    }

    public function facility()
    {
        return view('frontend.facility');
    }

    public function scholarship()
    {
        return view('frontend.scholarship');
    }
    public function blog()
    {
        $blogs=Blog::where('status',1)->get();
        return view('frontend.include.blog',compact('blogs'));

    }
    public function blog_details($id){
        $blog=Blog::where('status',1)->where('id',$id)->first();
        return view('frontend.include.blog_details',compact('blog'));
    }
}
