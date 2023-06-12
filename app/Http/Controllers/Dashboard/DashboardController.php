<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{

  public function show_dashboard()
  {
    $_SESSION['home'] = 'on';
    // return dd($id);
    $posts  = Post::with('user')->get();
    $isFound = true;
    return view('admin.Dashboard.Timeline.Timeline', with([
      'posts' => $posts,
      'found' => $isFound,
      'client' => $_SESSION['client'],
    ]));
  }
}
