<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class PagesController extends Controller
{
    public function home()
    {
//        $process = new Process("python C:\\Users\\maqu\\Projects\\firstProject\\app\\Scripts\\test.py");
//        $process->run();
//        if (!$process->isSuccessful()) {
//            throw new ProcessFailedException($process);
//        }
        $text = 'dit is een analyse';
        $result = shell_exec('python C:\\Users\\maqu\\Projects\\firstProject\\app\\Scripts\\test.py "een zin als parameter"');
        return view('welcome');
    }

    public function  contact() {
        return view('contact');
    }
}
