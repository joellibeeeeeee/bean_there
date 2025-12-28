@extends('layouts.admin')

@section('admin-content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="font-family: 'Cooper Black', serif; font-size: 2.5rem; color: #4A2C2A; margin: 0;">User Management</h1>
        <button onclick="openUserModal()" style="background-color: #AEA9A0; color: white; border: none; padding: 12px 24px; border-radius: 12px; font-family: 'Poppins', sans-serif; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px;">
            <i class="fa-solid fa-user-plus"></i> Add Staff
        </button>
    </div>

    <div style="background: white; border-radius: 20px; overflow: hidden; font-family: 'Poppins', sans-serif; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #F0F2F5; color: #AEA9A0; font-size: 13px; text-transform: uppercase;">
                    <th style="padding: 20px;">Staff Member</th>
                    <th style="padding: 20px;">Role</th>
                    <th style="padding: 20px;">Email</th>
                    <th style="padding: 20px;">Date Joined</th>
                    <th style="padding: 20px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; color: #4A2C2A;">
                <tr class="user-row" style="border-bottom: 1px solid #F0F2F5;">
                    <td style="padding: 20px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: #FDF9F0; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4A2C2A; font-weight: bold;">JD</div>
                        <div>
                            <div style="font-weight: 600;">John Doe</div>
                            <div style="font-size: 11px; color: #AEA9A0;">ID: STF-001</div>
                        </div>
                    </td>
                    <td style="padding: 20px;">
                        <span style="background: #FFF4E5; color: #D48806; padding: 5px 12px; border-radius: 8px; font-size: 12px; font-weight: 600;">Head Baker</span>
                    </td>
                    <td style="padding: 20px;">john.baker@bakeshop.com</td>
                    <td style="padding: 20px;">Oct 12, 2024</td>
                    <td style="padding: 20px; text-align: center;">
                        <button style="background: none; border: none; color: #AEA9A0; cursor: pointer; padding: 5px;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button style="background: none; border: none; color: #E74C3C; cursor: pointer; padding: 5px;"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr class="user-row" style="background-color: #FAFAFA;">
                    <td style="padding: 20px; display: flex; align-items: center; gap: 12px;">
                        <div style="width: 40px; height: 40px; background: #F0F4F8; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4A2C2A; font-weight: bold;">AS</div>
                        <div>
                            <div style="font-weight: 600;">Anne Smith</div>
                            <div style="font-size: 11px; color: #AEA9A0;">ID: STF-002</div>
                        </div>
                    </td>
                    <td style="padding: 20px;">
                        <span style="background: #E6FFFB; color: #08979C; padding: 5px 12px; border-radius: 8px; font-size: 12px; font-weight: 600;">Senior Barista</span>
                    </td>
                    <td style="padding: 20px;">anne.barista@bakeshop.com</td>
                    <td style="padding: 20px;">Nov 05, 2024</td>
                    <td style="padding: 20px; text-align: center;">
                        <button style="background: none; border: none; color: #AEA9A0; cursor: pointer; padding: 5px;"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button style="background: none; border: none; color: #E74C3C; cursor: pointer; padding: 5px;"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="userModal" style="display: none; position: fixed; inset: 0; background: rgba(74, 44, 42, 0.5); z-index: 9999; backdrop-filter: blur(4px); align-items: center; justify-content: center;">
        <div style="background: white; width: 450px; border-radius: 25px; padding: 35px; position: relative; font-family: 'Poppins', sans-serif;">
            <h2 style="font-family: 'Cooper Black', serif; color: #4A2C2A; margin-top: 0;">Add Staff Member</h2>
            <form onsubmit="event.preventDefault();">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px;">Full Name</label>
                    <input type="text" placeholder="Enter name" style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px;">Staff Role</label>
                    <select style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none; background: white;">
                        <option>Baker</option>
                        <option>Barista</option>
                        <option>Store Manager</option>
                    </select>
                </div>
                <div style="margin-bottom: 25px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px;">Email Address</label>
                    <input type="email" placeholder="email@bakeshop.com" style="width: 100%; padding: 12px; border-radius: 10px; border: 1.5px solid #F0F2F5; outline: none;">
                </div>
                <div style="display: flex; gap: 10px;">
                    <button onclick="closeUserModal()" type="button" style="flex: 1; padding: 12px; border-radius: 12px; border: none; background: #F5F5F5; cursor: pointer; font-weight: 600;">Cancel</button>
                    <button type="submit" style="flex: 2; padding: 12px; border-radius: 12px; border: none; background: #4A2C2A; color: white; cursor: pointer; font-weight: 600;">Save Staff Member</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .user-row:hover { background-color: #FDF9F0 !important; transition: 0.2s; }
    </style>

    <script>
        function openUserModal() { document.getElementById('userModal').style.display = 'flex'; }
        function closeUserModal() { document.getElementById('userModal').style.display = 'none'; }
    </script>
@endsection