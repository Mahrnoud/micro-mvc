<?php


namespace Controllers\Interfaces;


interface ControllerInterface
{
    function index();
    function create();
    function store();
    function show($id);
    function edit($id);
    function update($id);
    function destroy($id);
}