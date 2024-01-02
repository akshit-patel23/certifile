<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Universities;
use App\Models\Courses;
use App\Model\Certificate;
use App\Models\Template;
use Clegginabox\PDFMerger\PDFMerger;
use PDF;







use League\Csv\Reader;
class Usercontrol extends Controller
{
    public function userform(){
        $uni=Universities::all();
        $temp=Template::all();
        return view('User.certgen',['uni'=>$uni,'temp'=>$temp]);
    }

    public function fetchcourse(Request $request,$id){

        $univ=Universities::find($id);
        $selectedcourseid=json_decode($univ->courses,true);
        $selectedcourses=Courses::whereIn('id',$selectedcourseid)->get();
        $options='<option selected>Open this select menu</option>';
        foreach ($selectedcourses as $courses) {
            $options.='<option value="'.$courses->id.'">'.$courses->name.'</option>';
        }
        
        echo $options ;
    }
    public function previewtemp(Request $request,$id){
        $temp=Template::find($id);
        $htmlstr=$temp->htmlstr;
        echo $htmlstr;
    }
    public function import(Request $request)
{
    $csvfile = $request->file('csv_file');
    $uniid = $request->get('universities');
    $uni = Universities::find($uniid);
    $uniname = $uni->name;

    $courseid = $request->get('courses');
    $course = Courses::find($courseid);
    $coursename = $course->name;

    $tempid = $request->get('template');
    $temp = Template::find($tempid);
    $htmlstr = $temp->htmlstr;

    $handle = fopen($csvfile->getPathname(), 'r');
    fgetcsv($handle);

    $certificatecontents = '';

    while (($row = fgetcsv($handle)) !== false) {
        $data = [
            'name' => $row[0],
            'class' => $row[1],
            'percentage' => $row[2],
            'fathersname' => $row[3],
            'phone' => $row[4],
        ];

        $name = $data['name'];
        $fathersname = $data['fathersname'];
        $percentage = $data['percentage'];
        $phone = $data['phone'];
        $class = $data['class'];
        // $date=date('Y-m-d');
        $date=date('d-m-Y');
        $search = array('{{studentname}}', '{{studentclass}}', '{{studentfathersname}}', '{{studentphone}}', '{{studentpercentage}}', '{{course}}', '{{studentuniversity}}','{{dated}}');
        $replace = array($name, $class, $fathersname, $phone, $percentage, $coursename, $uniname,$date);
        $certificatecontent = str_replace($search, $replace, $htmlstr);
        $certificatecontents.= $certificatecontent;
    }

    fclose($handle);
    
    $pdf=PDF::loadhtml($certificatecontents);
    $pdf->setPaper('letter','landscape');
    return $pdf->stream('certificate.pdf');
}    
}
