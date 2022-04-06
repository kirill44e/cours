<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Callback;
use App\Models\Review;
use App\Models\User;
use App\Models\Order;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
  public function callback(ContactRequest $req) {

    $callback = new Callback();
    $callback->number = $req->input('number');

    $callback->save();

    return redirect()->route('home')->with('success', 'Заявка на звонок отправлена');
  }

  public function review_submit(Request $req) {

    $valid = $req->validate([
      'name' => 'required|min:5|max:50',
      'email' => 'required|min:5',
      'message' => 'required|min:5',
    ]);

    $contact = new Review();
    $contact->user_id = Auth::id();
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('reviews_user')->with('success', 'Отзыв отправлен');
  }

  public function submit(Request $req) {
    $valid = $req->validate([
      'name' => 'required|min:5|max:50',
      'email' => 'required|min:5',
      'message' => 'required|min:5',
    ]);


    $contact = new Order();
    $contact->user_id = Auth::id();
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->category = $req->input('category');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('user')->with('success', 'Сообщение добавлено');
  }

  public function allData() {
    $contact = new Order;

    $data = [];
    $user_id = Auth::user()->id;
    $data = $contact->where('user_id', '=', $user_id)->orderBy('id', 'DESC')->get();

    return view('all_message', ['data' => $data]);
  }

  public function allReview() {
    $contact = new Review;
    $data = [];

    return view('reviews', ['data' => $contact->all()]);
  }

  public function oneMessage($id) {
    $contact = new Order;
    return view('one-message', ['data' => $contact->find($id)]);
  }

  public function oneReview($id) {
    $contact = new Review;
    return view('one-review', ['data' => $contact->find($id)]);
  }

  public function update($id) {
    $contact = new Order;
    return view('update', ['data' => $contact->find($id)]);
  }

  public function update_submit($id, Request $req) {

    $contact = Order::find($id);
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->category = $req->input('category');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('order-data-one', $id)->with('success', 'Сообщение обновлено');
  }

  public function delete($id) {
    Order::find($id)->delete();
    return redirect()->route('order-data')->with('success', 'Сообщение пользователя удалено');
  }
}
