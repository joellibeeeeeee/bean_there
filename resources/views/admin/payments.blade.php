@extends('layouts.admin')

@section('admin-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Payment Transaction</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; font-family: 'Poppins', sans-serif;">
        <div style="background: #FDF9F0; padding: 20px; border-radius: 15px; border: 1px solid #EEE;">
            <p style="margin: 0; font-size: 12px; color: #AEA9A0; text-transform: uppercase;">Total Revenue</p>
            <h3 style="margin: 5px 0 0; color: #4A2C2A;">₱128,450.00</h3>
        </div>
        <div style="background: #FDF9F0; padding: 20px; border-radius: 15px; border: 1px solid #EEE;">
            <p style="margin: 0; font-size: 12px; color: #AEA9A0; text-transform: uppercase;">Completed</p>
            <h3 style="margin: 5px 0 0; color: #4A2C2A;">142 Payments</h3>
        </div>
    </div>

    <div style="background: white; border-radius: 20px; overflow: hidden; font-family: 'Poppins', sans-serif;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #F0F2F5; color: #AEA9A0; font-size: 13px; text-transform: uppercase;">
                    <th style="padding: 20px;">Transaction ID</th>
                    <th style="padding: 20px;">Order No.</th>
                    <th style="padding: 20px;">Method</th>
                    <th style="padding: 20px;">Amount</th>
                    <th style="padding: 20px;">Status</th>
                    <th style="padding: 20px;">Date</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; color: #4A2C2A;">
                <tr class="payment-row" style="border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; font-weight: 500;">TXN-8821</td>
                    <td style="padding: 20px;">#001</td>
                    <td style="padding: 20px;"><i class="fa-solid fa-credit-card" style="margin-right: 8px; color: #AEA9A0;"></i> GCash</td>
                    <td style="padding: 20px; font-weight: 700;">₱450.00</td>
                    <td style="padding: 20px;">
                        <span style="background: #E6FFFB; color: #08979C; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">Paid</span>
                    </td>
                    <td style="padding: 20px; color: #666;">Dec 24, 2025</td>
                </tr>
                <tr class="payment-row" style="background-color: #FAFAFA; border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; font-weight: 500;">TXN-8822</td>
                    <td style="padding: 20px;">#002</td>
                    <td style="padding: 20px;"><i class="fa-solid fa-money-bill-1" style="margin-right: 8px; color: #AEA9A0;"></i> Cash</td>
                    <td style="padding: 20px; font-weight: 700;">₱280.00</td>
                    <td style="padding: 20px;">
                        <span style="background: #FFF4E5; color: #D48806; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">Pending</span>
                    </td>
                    <td style="padding: 20px; color: #666;">Dec 24, 2025</td>
                </tr>
            </tbody>
        </table>
    </div>

    <style>
        .payment-row:hover {
            background-color: #FDF9F0 !important;
            transition: 0.2s;
        }
    </style>
@endsection