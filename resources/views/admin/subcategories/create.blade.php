@extends('layouts.admin')

@section('admin-content')
<div style="max-width: 500px; margin: 40px auto;">
    <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); font-family: 'Poppins', sans-serif;">
        <h1 style="font-family: 'Cooper Black', serif; color: #4A2C2A; margin: 0 0 8px 0; font-size: 1.8rem;">Add Subcategory</h1>
        <p style="color: #666; font-size: 14px; margin-bottom: 25px;">Create a new subcategory for your products.</p>

        <form method="POST" action="{{ route('admin.subcategories.store') }}">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: #4A2C2A;">Subcategory Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Cakes & Slices" 
                       style="width: 100%; padding: 12px 15px; border-radius: 12px; border: 1.5px solid #F0F2F5; outline: none; box-sizing: border-box; font-family: 'Poppins', sans-serif;">
                @error('name')<div style="color:#c0392b; font-size:12px; margin-top:4px;">{{ $message }}</div>@enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: #4A2C2A;">Main Category</label>
                <select name="category_id" style="width: 100%; padding: 12px 15px; border-radius: 12px; border: 1.5px solid #F0F2F5; outline: none; background: white; cursor: pointer; font-family: 'Poppins', sans-serif;">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id')<div style="color:#c0392b; font-size:12px; margin-top:4px;">{{ $message }}</div>@enderror
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: #4A2C2A;">Description (Optional)</label>
                <textarea name="description" rows="3" placeholder="Brief description of this subcategory"
                          style="width: 100%; padding: 12px 15px; border-radius: 12px; border: 1.5px solid #F0F2F5; outline: none; box-sizing: border-box; font-family: 'Poppins', sans-serif; resize: vertical;">{{ old('description') }}</textarea>
            </div>

            <button type="submit" style="width: 100%; background: #4A2C2A; color: white; border: none; padding: 15px; border-radius: 15px; font-weight: 700; cursor: pointer; font-family: 'Poppins', sans-serif; font-size: 15px; transition: 0.3s;"
                    onmouseover="this.style.background='#633d3a'" onmouseout="this.style.background='#4A2C2A'">
                Create Subcategory
            </button>
            
            <div style="text-align: center; margin-top: 15px;">
                <a href="{{ route('admin.subcategories.index') }}" style="color: #AEA9A0; text-decoration: none; font-size: 14px;">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
