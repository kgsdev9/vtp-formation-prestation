<?php

namespace App\Http\Controllers\Courses;






use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\LevelService;
use App\Services\CourseService;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseEssential;
use App\Http\Requests\CourseRequest;
use App\Models\CourseEssentielle;
use App\Models\Episode;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    protected $categoryService ;
    protected $leveService ;
    protected $courseService;


    public function __construct(CategoryService $categoryService,LevelService $levelService, CourseService $courseService)

    {
        $this->categoryService = $categoryService ;
        $this->leveService = $levelService ;
        $this->courseService = $courseService ;
        $this->middleware('auth');
    }

    public function index() {

        return view('profiledashboard.courses.liste', [
        'CourseTeacher' => $this->courseService->teacherCourse()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiledashboard.courses.add', [
            'levelAll' => $this->leveService->all(),
            'categoryAll' => $this->categoryService->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {

        // dd($request->all());
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $img = Image::make($image->path());
        $img->resize(825, 490, function ($constraint) {
            $constraint->aspectRatio();
        })->save('courss/images'.'/'.$imageName);

          $course = Course::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'prix' => $request->input('prix'),
            'duration' => $request->input('duration'),
            'category_id' => $request->input('category_id'),
            'level_id' => $request->input('level_id'),
            'url_video' => $request->input('url_video'),
            'description' => $request->input('description'),
            'image' => $imageName,
            'typecours'=> $request->input('typeformation') ?? 'EN lIGNE',
            'user_id' => Auth::user()->id
        ]);

        $validatedData = $request->validate([
            'key_points' => 'required|array',
        ]);

        $keyPointsString = implode(', ', $validatedData['key_points']);
        // Créer le cours avec la chaîne de points clés comme nom
        $courseesentielle = CourseEssentielle::create([
            'key_points' => $keyPointsString,
            'course_id' => $course->id,
        ]);

        $validatedData = $request->validate([
            'episode_title' => 'required|array',
            'episode_duration' => 'required|array',
            'episode_url' => 'required|array',
            'episode_previsualization' => 'required|array',
        ]);

        foreach ($validatedData['episode_title'] as $index => $title) {
            Episode::create([
                'title' => $title,
                'duration' => $validatedData['episode_duration'][$index],
                'url' => $validatedData['episode_url'][$index],
                'previsualiation' => isset($validatedData['episode_previsualization'][$index]),
                'course_id' => $course->id,
            ]);
        }

        flashy()->success('Formation ajoutée avec success'. Auth::user()->name);
        return redirect()->route('courses.index', ['slug'=>$course->slug, 'id' => $course->id])->with('sucess', 'Votr Fomation a été ajouté avec sucess');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);


        return view('profiledashboard.courses.edit', [
            'categoryAll' => $this->categoryService->all(),
            'levelAll' =>$this->leveService->all(),
            'course' => $course

         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource = Course::find($id);
        $ressource->title = $request->input('title');
        $ressource->slug = Str::slug($request->input('title'));
        $ressource->prix = $request->input('prix');
        $ressource->category_id = $request->input('category_id');
        $ressource->level_id = $request->input('level_id');
        $ressource->url_video = $request->input('url_video');
        $ressource->description = $request->input('description');
        $ressource->update();
        flashy()->success('Formation modifiée avec success'. Auth::user()->name);
        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        flashy()->success('Formation supprimée avec succes'. Auth::user()->name);
        return redirect()->back();
    }
}
