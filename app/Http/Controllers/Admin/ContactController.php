<?php

namespace App\Http\Controllers\Admin;


use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact_list(Guard $auth)
    {
        $contacts = DB::table('Contacts')->where('user_id', $auth->id())->orderBy('created_at', 'DESC')->paginate(2);
        return view('admin.list', ['contacts' => $contacts]);
    }

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request, Guard $auth)
    {
        $user_id = $auth->id();
        //dd($request->all());
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse1' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'numero' => 'required',
        ]);

        $data = array(
            'civilite' => $request->civilite,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse1' => $request->adresse1,
            'adresse2' => $request->adresse2,
            'code_postal' => $request->code_postal,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'numero' => $request->numero,
            'user_id' => $user_id
        );
        DB::table('Contacts')->insert($data);

        return redirect()->route('contact.add')->with('success', 'Votre contact à été ajouté avec succès');

    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        //dd($contact->nom);
        return view('admin.edit', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->update($request->all());
        return redirect(route('contact.edit', $contacts))->with('success', 'Modification éffectué avec succès');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contact.list')->with('success', 'Supression éffectué avec succès');
    }

    public function download(Request $request, Guard $auth){
        $contacts=DB::table('Contacts')
            ->select('id','civilite','nom','prenom','adresse1', 'adresse2', 'code_postal', 'ville', 'pays', 'numero')
            ->where('user_id', $auth->id())
            ->get();
        $tot_record_found=0;
        if(count($contacts)>0){
            $tot_record_found=1;

            $CsvData=array('id','civilite','nom','prenom','adresse1', 'adresse2', 'code_postal', 'ville', 'pays', 'numero');
            foreach($contacts as $value){
                $CsvData[]=$value->id.','.$value->civilite.','.$value->nom.','.$value->prenom.','.$value->adresse1.','.$value->adresse2.','.$value->code_postal.','.$value->ville.','.$value->pays.','.$value->numero;
            }

            $filename="adresse-".date('Y-m-d').".csv";
            $file_path=base_path().'/'.$filename;
            $file = fopen($file_path,"w+");
            foreach ($CsvData as $exp_data){
                fputcsv($file,explode(',',$exp_data));
            }
            fclose($file);

            $headers = ['Content-Type' => 'application/csv'];
            return response()->download($file_path,$filename,$headers );
        }
        return view('admin.download',['record_found' =>$tot_record_found]);
    }
}