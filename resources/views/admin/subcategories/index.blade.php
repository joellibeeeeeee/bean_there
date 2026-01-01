@extends('layouts.admin')

@section('admin-content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin: 0;">Subcategories</h1>
            <p style="color:#888; margin:5px 0 0;">Manage your product subcategories</p>
        </div>
        
        <a href="{{ route('admin.subcategories.create') }}" style="background-color: #B07051; color: white; border: none; padding: 12px 24px; border-radius: 12px; font-family: 'Poppins', sans-serif; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration:none;">
            <i class="fa-solid fa-plus"></i> Add Subcategory
        </a>
    </div>

    @if(session('success'))
        <div style="background:#d4edda; border:1px solid #c3e6cb; color:#155724; padding:12px 16px; border-radius:8px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Quick Stats --}}
    <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:16px; margin-bottom:24px;">
        @php
            $total = $subcategories->count();
            $pastriesCount = $subcategories->where('category.slug', 'pastries')->count();
            $drinksCount = $subcategories->where('category.slug', 'drinks')->count();
        @endphp
        <div style="background:#E6FFFB; padding:20px; border-radius:12px; text-align:center;">
            <div style="font-size:28px; font-weight:700; color:#08979C;">{{ $total }}</div>
            <div style="color:#08979C; font-size:13px;">Total Subcategories</div>
        </div>
        <div style="background:#FFF7E6; padding:20px; border-radius:12px; text-align:center;">
            <div style="font-size:28px; font-weight:700; color:#D46B08;">{{ $pastriesCount }}</div>
            <div style="color:#D46B08; font-size:13px;">Pastries</div>
        </div>
        <div style="background:#F9F0FF; padding:20px; border-radius:12px; text-align:center;">
            <div style="font-size:28px; font-weight:700; color:#722ED1;">{{ $drinksCount }}</div>
            <div style="color:#722ED1; font-size:13px;">Drinks</div>
        </div>
    </div>

    {{-- Subcategories Table --}}
    <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
        <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif;">
            <thead>
                <tr style="background: #F8F9FA; border-bottom: 2px solid #E9ECEF;">
                    <th style="padding: 16px 20px; text-align: left; font-weight: 600; color: #4A2C2A; font-size: 13px;">NAME</th>
                    <th style="padding: 16px 20px; text-align: left; font-weight: 600; color: #4A2C2A; font-size: 13px;">CATEGORY</th>
                    <th style="padding: 16px 20px; text-align: center; font-weight: 600; color: #4A2C2A; font-size: 13px;">PRODUCTS</th>
                    <th style="padding: 16px 20px; text-align: right; font-weight: 600; color: #4A2C2A; font-size: 13px;">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subcategories as $sub)
                    <tr style="border-bottom: 1px solid #F0F0F0;">
                        <td style="padding: 16px 20px;">
                            <div style="font-weight: 600; color: #333;">{{ $sub->name }}</div>
                            @if($sub->description)
                                <div style="font-size: 12px; color: #888; margin-top: 2px;">{{ Str::limit($sub->description, 50) }}</div>
                            @endif
                        </td>
                        <td style="padding: 16px 20px;">
                            <span style="background: {{ $sub->category->slug === 'pastries' ? '#FFF7E6' : '#F9F0FF' }}; color: {{ $sub->category->slug === 'pastries' ? '#D46B08' : '#722ED1' }}; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                {{ $sub->category->name }}
                            </span>
                        </td>
                        <td style="padding: 16px 20px; text-align: center;">
                            <span style="background: #E6F7FF; color: #1890FF; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">
                                {{ $sub->products->count() }}
                            </span>
                        </td>
                        <td style="padding: 16px 20px; text-align: right;">
                            <a href="{{ route('admin.subcategories.edit', $sub) }}" style="color: #1890FF; text-decoration: none; margin-right: 16px; font-size: 14px;">
                                <i class="fa-solid fa-pen"></i> Edit
                            </a>
                            <form action="{{ route('admin.subcategories.destroy', $sub) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this subcategory?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: #CF1322; cursor: pointer; font-size: 14px; font-family: 'Poppins', sans-serif;">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding: 40px; text-align: center; color: #888;">
                            <i class="fa-solid fa-folder-open" style="font-size: 32px; margin-bottom: 10px; display: block; color: #CCC;"></i>
                            No subcategories yet. <a href="{{ route('admin.subcategories.create') }}" style="color: #B07051;">Add one now</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
