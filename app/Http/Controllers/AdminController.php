<?php

namespace App\Http\Controllers;
use App\Models\Elevation;
use App\Models\Export;
use App\Models\Granite;
use App\Models\Indian;
use App\Models\Italian;
use App\Models\Query;
use App\Models\Sand;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Project;
use Yajra\DataTables\DataTables as Datatables;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('home');
    }
    public function manage_query(Request $request)
    {
        $data = Query::all();
        // Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
           
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.manage-query', compact('data'));
       
    }
       public function save_query(Request $request)
       {
        ($request->all);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        
        $query = new Query ();
        $query->name =  $request->input('name');
        $query->email = $request->input('email');
        $query->phone =  $request->input('phone');
        $query->subject = $request->input('subject');
        $query->message = $request->input('message');
     
         $query->save();

        return redirect()->back()->with('success', 'Query updated successfully.');

       }
       public function delete_query(Request $request)
       {
           $query = Query::find($request->id);
           $query->delete();
           return response()->json(['success', true]);
       }

       public function manage_teams(Request $request)
       {
           $data = Team::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("TeamImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-team', compact('data'));
          
       }
   
       public function save_teams(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'title' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $teams = new Team();
           $teams->name =  $request->input('name');
           $teams->title = $request->input('title');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('TeamImages/', $filename1);
               $teams->image = $filename1;
            
             }

            $teams->save();
   
           
           return redirect()->back()->with('success', 'team created successfully.');
   
       }
   
       public function update_teams(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'title' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $teams = Team::find($id);
           $teams->name =  $request->input('name');
           $teams->title = $request->input('title');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('TeamImages/', $filename1);
               $teams->image = $filename1;
            
             }
   
            $teams->save();
   
           
           return redirect()->back()->with('success', 'teams updated successfully.');
   
       }
   
       public function delete_teams(Request $request)
       {
           $teams = Team::find($request->id);
           $teams->delete();
           return response()->json(['success', true]);
       }

       public function manage_gallery(Request $request)
       {
           $data = Gallery::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("GalleryImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-gallery', compact('data'));
          
       }
   
       public function save_gallery(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $gallery = new Gallery();

           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('GalleryImages/', $filename1);
               $gallery->image = $filename1;
             }

            $gallery->save();
   
           return redirect()->back()->with('success', 'image created successfully.');
       }
       public function update_gallery(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $gallery = Gallery::find($id);
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('GalleryImages/', $filename1);
               $gallery->image = $filename1; 
             }
   
            $gallery->save();
           return redirect()->back()->with('success', 'gallery updated successfully.');
   
       }
   
       public function delete_gallery(Request $request)
       {
           $gallery = Gallery::find($request->id);
           $gallery->delete();
           return response()->json(['success', true]);
       }

       public function manage_blogs(Request $request)
       {
           $data = Blog::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("BlogImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-blogs', compact('data'));
          
       }
   
       public function save_blogs(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'date' => 'required',
               'month' => 'required',
               'title' => 'required',
               'image' => 'required',
               'description' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $blogs = new Blog();
           $blogs->date =  $request->input('date');
           $blogs->month =  $request->input('month');
           $blogs->title = $request->input('title');
           $blogs->description = $request->input('description');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('BlogImages/', $filename1);
               $blogs->image = $filename1;
            
             }

            $blogs->save();
   
           return redirect()->back()->with('success', 'blog created successfully.');
   
       }
   
       public function update_blogs(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'date' => 'required',
               'month' => 'required',
               'title' => 'required',
               'image' => 'required',
               'description' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $blogs = Blog::find($id);
           $blogs->date =  $request->input('date');
           $blogs->month =  $request->input('month');
           $blogs->title = $request->input('title');
           $blogs->description = $request->input('description');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('BlogImages/', $filename1);
               $blogs->image = $filename1;
            
             }

            $blogs->save();
           
           return redirect()->back()->with('success', 'blogs updated successfully.');
       }
   
       public function delete_blogs(Request $request)
       {
           $blogs = Blog::find($request->id);
           $blogs->delete();
           return response()->json(['success', true]);
       }

       public function manage_projects(Request $request)
       {
           $data = Project::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("ProjectImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-projects', compact('data'));
          
       }
   
       public function save_projects(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'service' => 'required',
               'title' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $projects = new Project();
           $projects->service =  $request->input('service');
           $projects->title = $request->input('title');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ProjectImages/', $filename1);
               $projects->image = $filename1;
            
             }

            $projects->save();
   
           
           return redirect()->back()->with('success', 'team created successfully.');
   
       }
   
       public function update_projects(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'service' => 'required',
               'title' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $projects = Project::find($id);
           $projects->service =  $request->input('service');
           $projects->title = $request->input('title');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ProjectImages/', $filename1);
               $projects->image = $filename1;
            
             }
   
            $projects->save();
   
           
           return redirect()->back()->with('success', 'teams updated successfully.');
   
       }
   
       public function delete_projects(Request $request)
       {
           $projects = Project::find($request->id);
           $projects->delete();
           return response()->json(['success', true]);
       }



       public function manage_indian(Request $request)
       {
           $data = Indian::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("IndianImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-indian', compact('data'));
          
       }
   
       public function save_indian(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $indians = new Indian();
           $indians->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('IndianImages/', $filename1);
               $indians->image = $filename1;
            
             }

            $indians->save();
   
           
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_indian(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $indians = Indian::find($id);
           $indians->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('IndianImages/', $filename1);
               $indians->image = $filename1;
            
             }
   
            $indians->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_indian(Request $request)
       {
           $indians = Indian::find($request->id);
           $indians->delete();
           return response()->json(['success', true]);
       }


       
       public function manage_italian(Request $request)
       {
           $data = Italian::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("ItalianImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-italian', compact('data'));
          
       }
   
       public function save_italian(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $italians = new Italian();
           $italians->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ItalianImages/', $filename1);
               $italians->image = $filename1;
            
             }

            $italians->save();
   
           
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_italian(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $italians = Italian::find($id);
           $italians->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ItalianImages/', $filename1);
               $italians->image = $filename1;
            
             }
   
            $italians->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_italian(Request $request)
       {
           $italians = Italian::find($request->id);
           $italians->delete();
           return response()->json(['success', true]);
       }

       public function manage_granite(Request $request)
       {
           $data = Granite::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("GraniteImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-granite', compact('data'));
          
       }
       public function save_granite(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $granites = new Granite();
           $granites->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('GraniteImages/', $filename1);
               $granites->image = $filename1;
            
             }

            $granites->save();
   
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_granite(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $granites = Granite::find($id);
           $granites->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('GraniteImages/', $filename1);
               $granites->image = $filename1;
            
             }
   
            $granites->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_granite(Request $request)
       {
           $granites = Granite::find($request->id);
           $granites->delete();
           return response()->json(['success', true]);
       }

       public function manage_elevation(Request $request)
       {
           $data = Elevation::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("ElevationImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-elevation', compact('data'));
          
       }
   
       public function save_elevation(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $elevations = new Elevation();
           $elevations->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ElevationImages/', $filename1);
               $elevations->image = $filename1;
            
             }

            $elevations->save();
   
           
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_elevation(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $elevations = Elevation::find($id);
           $elevations->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ElevationImages/', $filename1);
               $elevations->image = $filename1;
            
             }
   
            $elevations->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_elevation(Request $request)
       {
           $elevations = Elevation::find($request->id);
           $elevations->delete();
           return response()->json(['success', true]);
       }

       public function manage_sand(Request $request)
       {
           $data = Sand::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("SandImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-sand', compact('data'));
          
       }
   
       public function save_sand(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $sands = new Sand();
           $sands->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('SandImages/', $filename1);
               $sands->image = $filename1;
            
             }

            $sands->save();
   
           
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_sands(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $sands = Sand::find($id);
           $sands->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('SandImages/', $filename1);
               $sands->image = $filename1;
            
             }
   
            $sands->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_sands(Request $request)
       {
           $sands = Sand::find($request->id);
           $sands->delete();
           return response()->json(['success', true]);
       }
 
       public function manage_export(Request $request)
       {
           $data = Export::all();
           // Log::info($data);
           if($request->ajax()){
               return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('image', function($row){
                   $image = '<img src="' . asset("ExportImages/" . $row->image) . '" width="80px">';
                   return $image;
               } )
               ->addColumn('action', function($row){
                   $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                   $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                   return $btn;
               })
               ->rawColumns(['action', 'image'])
               ->make(true);
           }
           return view('admin.manage-export', compact('data'));
          
       }
   
       public function save_export(Request $request) 
       {
           // dd($request->all());// Validate the incoming request data
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $exports = new Export();
           $exports->name =  $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ExportImages/', $filename1);
               $exports->image = $filename1;
            
             }

            $exports->save();
   
           
           return redirect()->back()->with('success', 'created successfully.');
   
       }
   
       public function update_export(Request $request ,$id)
       {
           //dd($request->all());
           $request->validate([
               'name' => 'required',
               'image' => 'required',
           ]);
   
           // Create a new gallery instance and fill it with the validated data
           $exports = Export::find($id);
           $exports->name = $request->input('name');
           if ($request->hasFile('image')) {
               $file1 = $request->file('image');
               $ext1 = $file1->getClientOriginalExtension();
               $filename1 = time() . '.' . $ext1;
               $file1->move('ExportImages/', $filename1);
               $exports->image = $filename1;
            
             }
   
            $exports->save();
   
           
           return redirect()->back()->with('success', 'updated successfully.');
   
       }
   
       public function delete_export(Request $request)
       {
           $exports = Export::find($request->id);
           $exports->delete();
           return response()->json(['success', true]);
       }

}
