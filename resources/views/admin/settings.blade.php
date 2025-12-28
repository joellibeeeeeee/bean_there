@extends('layouts.admin')

@section('admin-content')
    <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin-bottom: 25px;">Settings</h1>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; font-family: 'Poppins', sans-serif;">
        
        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
            <h3 style="margin-top: 0; color: #4A2C2A; border-bottom: 1.5px solid #F0F2F5; padding-bottom: 10px;">Store Profile</h3>
            
            <form style="margin-top: 20px;">
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Bakeshop Name</label>
                    <input type="text" value="The Sweet Corner" style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none;">
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Contact Number</label>
                    <input type="text" value="+63 912 345 6789" style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none;">
                </div>

                <div style="margin-bottom: 25px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Store Address</label>
                    <textarea style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none; height: 80px;">123 Pastry Lane, Quezon City, Metro Manila</textarea>
                </div>

                <button type="submit" style="background: #4A2C2A; color: white; border: none; padding: 12px 24px; border-radius: 12px; font-weight: 600; cursor: pointer;">Save Profile</button>
            </form>
        </div>

        <div style="display: flex; flex-direction: column; gap: 30px;">
            
            <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                <h3 style="margin-top: 0; color: #4A2C2A; border-bottom: 1.5px solid #F0F2F5; padding-bottom: 10px;">Operating Hours</h3>
                
                <div style="margin-top: 20px; display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 14px;">Monday - Friday</span>
                        <input type="text" value="8:00 AM - 7:00 PM" style="width: 160px; padding: 8px; border-radius: 8px; border: 1.5px solid #F0F2F5; text-align: center;">
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 14px;">Saturday - Sunday</span>
                        <input type="text" value="9:00 AM - 5:00 PM" style="width: 160px; padding: 8px; border-radius: 8px; border: 1.5px solid #F0F2F5; text-align: center;">
                    </div>
                </div>
            </div>

            <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                <h3 style="margin-top: 0; color: #4A2C2A; border-bottom: 1.5px solid #F0F2F5; padding-bottom: 10px;">Login & Security</h3>
                <p style="font-size: 13px; color: #AEA9A0; margin-bottom: 20px;">Update your admin password periodically to stay secure.</p>
                <button style="background: #FDF9F0; color: #4A2C2A; border: 1.5px solid #4A2C2A; padding: 10px 20px; border-radius: 10px; font-weight: 600; cursor: pointer;">Change Password</button>
            </div>

        </div>
    </div>
@endsection