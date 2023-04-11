<?php



// class UserController extends Controller
// {
//     public function test(Request $request){
//         $demo=[
//             'name'=>'Sara',
//             'surname'=> 'Bentivegni',
//             'active'=>true
//         ];

//         return response()->json($demo);
//       /**  return response(json_encode($demo), 200,
//       *  [
//        *     'Content-type'=>'application/json'
//       *  ]
//     *);*/ 
//     }
// }
// class UserController extends Controller
// {
//     public function test(Request $request)
//     {
//         return response()->json([
//             'value' => $request->input('user.username')
//         ]);
//     }
// }



namespace App\Http\Controllers;

use App\Models\User;//se non si usa la use quando si attiva la classe user la va a cercare come namespace
//nel namespace di dove ci si trova, quindi qui app/http/controllers
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(Request $request) {
        //username VARCHAR 255
        //email VARCHAR 255
        //name VARCHAR 255
        //surname VARCHAR 255
        //age INTEGER
        //title VARCHAR 255 DEFAULT NULL
        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [

            'username' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'age' => ['required', 'integer'],
            'title' => ['max:255']
        ]);

        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        //Qui dovrò agire su DB facendo un INSERT
        // $user= new User();
        // $user->username='prova';
        // $user->name='prova nome';
        // $user->surname='prova cognome';
        // $user->email='prova@example.it';
        // $user->age=22;
        // $user->save();
        $user= new User();
        $user->username=$request->input('username');
        $user->name=$request->input('name');
        $user->surname=$request->input('surname');
        $user->email=$request->input('email');
        $user->age=$request->input('age');
        $user->title=$request->input('title');//il validator mi fa i controlli
        //se non avessi il validator sarebbe un error lato server
        $user->save();

        return response()->json($user,201);

    }

    public function delete(Request $request, $id) {
        //DELETE http://localhost:8000/api/users/7
        //$id = 7

        //Operazione di DELETE su DB
        $user=User::where('id','=',$id)->firstOrFail();
        $user->delete();
        return response()->json(null,204);
    }

    public function read(Request $request, $id) {
        //GET http://localhost:8000/api/users/3
        //$id=3

        //Operazione di SELECT su DB
        //$user=User::findOrFail($id);
        //uguale a 
        $user= User::where('id','=',$id)->firstOrFail();
        return response()->json($user);
        //se non c'è la risposta la fail mi dà in automatico 404
    }

    public function readAll(Request $request) {
        //Operazione di SELECT su DB
        //select* from users
        $users= User::with('review')->get();//in questo modo seleziono tutto e me le mette nella
        //$users che sarà un vettore
        return response()->json($users,200);//200 è comunque un parametro di default

    }

    public function update(Request $request, $id) {
        //PUT http://localhost:8000/api/users/22
        //$id=22     

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'age' => ['required', 'integer'],
            'title' => ['max:255']
        ]);

        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        //Ora eseguo la UPDATE su database
        $user= User::where('id','=',$id)->firstOrFail();
        //leggo da db qui sopra per poi modificare

        $user->username=$request->input('username');
        $user->name=$request->input('name');
        $user->surname=$request->input('surname');
        $user->email=$request->input('email');
        $user->age=$request->input('age');
        $user->title=$request->input('title');//il validator mi fa i controlli
        //se non avessi il validator sarebbe un error lato server
        $user->save();

        return response()->json($user,200);

    }
   

}