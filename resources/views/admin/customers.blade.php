@extends('layouts.admin')

@section('admin-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Customers</h1>

    <div style="background: white; border-radius: 20px; overflow: hidden; font-family: 'Poppins', sans-serif;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #F0F2F5; color: #AEA9A0; font-size: 13px; text-transform: uppercase;">
                    <th style="padding: 20px;">Customer Name</th>
                    <th style="padding: 20px;">Email</th>
                    <th style="padding: 20px;">Total Orders</th>
                    <th style="padding: 20px;">Total Spent</th>
                    <th style="padding: 20px;">Status</th>
                    <th style="padding: 20px; text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; color: #4A2C2A;">
                <tr class="customer-row" style="border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 35px; height: 35px; background: #FDF9F0; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #AEA9A0; font-weight: bold;">MC</div>
                        Maria Clara
                    </td>
                    <td style="padding: 20px;">maria.clara@email.com</td>
                    <td style="padding: 20px;">12 Orders</td>
                    <td style="padding: 20px; font-weight: 600;">₱5,400.00</td>
                    <td style="padding: 20px;">
                        <span style="background: #E6FFFB; color: #08979C; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">Active</span>
                    </td>
                    <td style="padding: 20px; text-align: center;">
                        <button style="background: none; border: none; color: #AEA9A0; cursor: pointer;"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </td>
                </tr>
                <tr class="customer-row" style="background-color: #FAFAFA; border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 35px; height: 35px; background: #FDF9F0; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #AEA9A0; font-weight: bold;">JL</div>
                        Juan Luna
                    </td>
                    <td style="padding: 20px;">juan.luna@email.com</td>
                    <td style="padding: 20px;">5 Orders</td>
                    <td style="padding: 20px; font-weight: 600;">₱1,250.00</td>
                    <td style="padding: 20px;">
                        <span style="background: #F0F2F5; color: #666; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">New</span>
                    </td>
                    <td style="padding: 20px; text-align: center;">
                        <button style="background: none; border: none; color: #AEA9A0; cursor: pointer;"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <style>
        .customer-row:hover {
            background-color: #FDF9F0 !important;
            transition: 0.2s;
        }
    </style>
@endsection