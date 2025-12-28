@extends('layouts.staff')

@section('staff-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Product Catalog</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
        <div style="background: white; border-radius: 15px; border: 1px solid #EEE; padding: 15px; font-family: 'Poppins';">
            <div style="height: 120px; background: #FDF9F0; border-radius: 10px; margin-bottom: 10px;"></div>
            <h4 style="margin: 0; font-size: 14px;">Ube Cheese Pandesal</h4>
            <p style="color: #AEA9A0; font-size: 11px;">Stock: 24 Available</p>
            </div>
    </div>
@endsection