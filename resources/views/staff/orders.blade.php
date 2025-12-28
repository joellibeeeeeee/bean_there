@extends('layouts.staff')

@section('staff-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Order Management</h1>

    <div style="display: flex; gap: 10px; margin-bottom: 20px; font-family: 'Poppins';">
        <button style="background: white; border: 1px solid #EEE; padding: 8px 15px; border-radius: 10px;">Type <i class="fa-solid fa-chevron-down" style="font-size: 10px;"></i></button>
        <button style="background: white; border: 1px solid #EEE; padding: 8px 15px; border-radius: 10px;">Status <i class="fa-solid fa-chevron-down" style="font-size: 10px;"></i></button>
    </div>

    <div style="background: white; border-radius: 20px; overflow: hidden; font-family: 'Poppins'; border: 1px solid #F0F2F5;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead style="background: #FAFAFA; color: #B07051; font-size: 12px; text-transform: uppercase;">
                <tr>
                    <th style="padding: 20px;">Order No.</th>
                    <th style="padding: 20px;">Customer</th>
                    <th style="padding: 20px;">Product</th>
                    <th style="padding: 20px;">Current Status</th>
                    <th style="padding: 20px;">Update Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; font-weight: 700;">#0012</td>
                    <td style="padding: 20px;">Juan Dela Cruz</td>
                    <td style="padding: 20px;">Classic Ensaymada (6)</td>
                    <td style="padding: 20px;">
                        <span style="background: rgba(176, 112, 81, 0.1); color: #B07051; padding: 5px 12px; border-radius: 20px; font-size: 11px; font-weight: 700;">PREPARING</span>
                    </td>
                    <td style="padding: 20px;">
                        <select onchange="alert('Status updated to: ' + this.value)" style="padding: 8px; border-radius: 8px; border: 1px solid #B07051; font-family: 'Poppins'; font-size: 12px; color: #4A2C2A; outline: none; cursor: pointer;">
                            <option value="" disabled selected>Update Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Preparing">Preparing</option>
                            <option value="Ready">Ready</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection