@extends('layouts.admin')

@section('title', 'Dashboard Admin - Sentra HKI UNIDA Gontor')
@section('header_title', 'Ringkasan Sistem Informasi HKI')

@push('styles')
<style>
    .grid-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px; }
    .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); border-left: 5px solid #3B6B80; }
    .card h3 { font-size: 14px; color: #64748b; margin-bottom: 8px; }
    .card .number { font-size: 28px; font-weight: 700; color: #0f172a; }
</style>
@endpush

@section('content')
    <div class="grid-cards">
        <div class="card" style="border-left-color: #3b82f6;">
            <h3>Total Permohonan</h3>
            <div class="number">{{ $totalPermohonan }}</div>
        </div>
        <div class="card" style="border-left-color: #10b981;">
            <h3>Hak Cipta</h3>
            <div class="number">{{ $totalHakCipta }}</div>
        </div>
        <div class="card" style="border-left-color: #f59e0b;">
            <h3>Paten</h3>
            <div class="number">{{ $totalPaten }}</div>
        </div>
        <div class="card" style="border-left-color: #8b5cf6;">
            <h3>Merek</h3>
            <div class="number">{{ $totalMerek }}</div>
        </div>
    </div>
@endsection