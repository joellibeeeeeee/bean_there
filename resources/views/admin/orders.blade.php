@extends('layouts.admin')

@section('admin-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Orders</h1>

    <div style="display: flex; gap: 15px; margin-bottom: 30px; font-family: 'Poppins', sans-serif;">
        <div style="position: relative;">
            <select style="appearance: none; padding: 10px 35px 10px 20px; border-radius: 25px; border: 1.5px solid #AEA9A0; background: white; color: #4A2C2A; cursor: pointer; font-size: 14px; outline: none;">
                <option>Type</option>
                <option>Delivery</option>
                <option>Pick-up</option>
            </select>
            <i class="fa-solid fa-chevron-down" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 12px; color: #AEA9A0; pointer-events: none;"></i>
        </div>

        <div style="position: relative;">
            <select style="appearance: none; padding: 10px 35px 10px 20px; border-radius: 25px; border: 1.5px solid #AEA9A0; background: white; color: #4A2C2A; cursor: pointer; font-size: 14px; outline: none;">
                <option>Status</option>
                <option>Pending</option>
                <option>Completed</option>
                <option>Cancelled</option>
            </select>
            <i class="fa-solid fa-chevron-down" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 12px; color: #AEA9A0; pointer-events: none;"></i>
        </div>
    </div>

    <div style="overflow-x: auto; font-family: 'Poppins', sans-serif; background: white; border-radius: 15px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 800px;">
            <thead>
                <tr style="border-bottom: 2px solid #F0F2F5; color: #AEA9A0; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">
                    <th style="padding: 20px 15px;">Order No.</th>
                    <th style="padding: 20px 15px;">Customer</th>
                    <th style="padding: 20px 15px;">Type</th>
                    <th style="padding: 20px 15px;">Status</th>
                    <th style="padding: 20px 15px;">Product</th>
                    <th style="padding: 20px 15px;">Total</th>
                    <th style="padding: 20px 15px;">Date</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; color: #4A2C2A;">
                <tr class="order-row" style="border-bottom: 1px solid #F0F2F5; transition: background 0.2s;">
                    <td style="padding: 18px 15px; font-weight: 700;">#001</td>
                    <td style="padding: 18px 15px;">Maria Clara</td>
                    <td style="padding: 18px 15px;">Delivery</td>
                    <td style="padding: 18px 15px;">
                        <span style="background: #FFF4E5; color: #D48806; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600;">Pending</span>
                    </td>
                    <td style="padding: 18px 15px;">Ube Cheese Pandesal</td>
                    <td style="padding: 18px 15px; font-weight: 700;">₱450.00</td>
                    <td style="padding: 18px 15px; color: #666;">Dec 24, 2025</td>
                </tr>

                <tr class="order-row" style="background-color: #FAFAFA; border-bottom: 1px solid #F0F2F5; transition: background 0.2s;">
                    <td style="padding: 18px 15px; font-weight: 700;">#002</td>
                    <td style="padding: 18px 15px;">Juan Luna</td>
                    <td style="padding: 18px 15px;">Pick-up</td>
                    <td style="padding: 18px 15px;">
                        <span style="background: #E6FFFB; color: #08979C; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600;">Completed</span>
                    </td>
                    <td style="padding: 18px 15px;">Classic Ensaymada</td>
                    <td style="padding: 18px 15px; font-weight: 700;">₱280.00</td>
                    <td style="padding: 18px 15px; color: #666;">Dec 23, 2025</td>
                </tr>
            </tbody>
        </table>
    </div>

    <style>
        .order-row:hover {
            background-color: #FDF9F0 !important; 
            cursor: pointer;
        }
    </style>
@endsection