@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-semibold text-gray-900">Tạo tài khoản ngân hàng</h1>
                <p class="text-sm text-gray-500">Nhập thông tin tài khoản mới và lưu vào hệ thống.</p>
            </div>
            <a href="{{ route('bank-account-index') }}" class="inline-flex items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                Quay lại danh sách
            </a>
        </div>

        <form action="{{ route('bank-account-store') }}" method="POST" class="space-y-6 bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            @csrf

            <div class="grid gap-6 md:grid-cols-2">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Số tài khoản</label>
                    <input type="text" name="account_number" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" placeholder="Nhập số tài khoản">
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Họ và tên</label>
                    <input type="text" name="full_name" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" placeholder="Nhập họ tên">
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" placeholder="Nhập email">
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Số điện thoại</label>
                    <input type="text" name="phone_number" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" placeholder="Nhập số điện thoại">
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Số dư</label>
                    <input type="number" name="balance" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" placeholder="Nhập số dư">
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-gray-700">Trạng thái</label>
                    <select name="status" class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="blocked">Blocked</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                Tạo tài khoản
            </button>
        </form>
    </div>
@endsection