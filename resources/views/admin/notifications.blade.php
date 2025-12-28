@extends('layouts.admin')

@section('admin-content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin: 0;">Notifications</h1>
        <button style="background: none; border: 1.5px solid #AEA9A0; color: #AEA9A0; padding: 8px 16px; border-radius: 10px; font-family: 'Poppins'; font-size: 13px; font-weight: 600; cursor: pointer;">
            Mark all as read
        </button>
    </div>

    <div style="font-family: 'Poppins', sans-serif;">
        <div style="background: #FFF1F0; border-left: 5px solid #F5222D; padding: 20px; border-radius: 15px; margin-bottom: 15px; display: flex; align-items: center; gap: 20px; position: relative;">
            <div style="background: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #F5222D; border: 1px solid #FFA39E;">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between;">
                    <h4 style="margin: 0; color: #4A2C2A; font-size: 15px;">Low Stock Alert</h4>
                    <span style="font-size: 11px; color: #AEA9A0;">2 minutes ago</span>
                </div>
                <p style="margin: 5px 0 0; font-size: 13px; color: #666;">Your <strong>Classic Ensaymada</strong> is down to 2 boxes. Restock soon!</p>
            </div>
        </div>

        <div style="background: #F6FFED; border-left: 5px solid #52C41A; padding: 20px; border-radius: 15px; margin-bottom: 15px; display: flex; align-items: center; gap: 20px;">
            <div style="background: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #52C41A; border: 1px solid #B7EB8F;">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between;">
                    <h4 style="margin: 0; color: #4A2C2A; font-size: 15px;">New Order Received</h4>
                    <span style="font-size: 11px; color: #AEA9A0;">1 hour ago</span>
                </div>
                <p style="margin: 5px 0 0; font-size: 13px; color: #666;">Customer <strong>Maria Clara</strong> placed a new order (#001).</p>
            </div>
        </div>

        <div style="background: white; border: 1.5px solid #F0F2F5; padding: 20px; border-radius: 15px; margin-bottom: 15px; display: flex; align-items: center; gap: 20px; opacity: 0.8;">
            <div style="background: #FDF9F0; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #4A2C2A;">
                <i class="fa-solid fa-check-double"></i>
            </div>
            <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between;">
                    <h4 style="margin: 0; color: #4A2C2A; font-size: 15px;">Payment Confirmed</h4>
                    <span style="font-size: 11px; color: #AEA9A0;">Yesterday</span>
                </div>
                <p style="margin: 5px 0 0; font-size: 13px; color: #666;">Payment for Order #005 has been successfully processed via GCash.</p>
            </div>
        </div>
    </div>
@endsection