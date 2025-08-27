@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">

        <!-- Welcome Section -->
        <div class="col-12 mb-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Selamat Datang, {{ Auth::user()->name }}</h4>
                    <p class="card-text">Sistem Informasi Manajemen Aset</p>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Aset</h5>
                    <h2 class="mb-0">{{ $totalAssets ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Aset Aktif</h5>
                    <h2 class="mb-0">{{ $activeAssets ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Maintenance</h5>
                    <h2 class="mb-0">{{ $maintenanceAssets ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Rusak</h5>
                    <h2 class="mb-0">{{ $brokenAssets ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Aktivitas Terakhir</h5>
                </div>
                <div class="card-body">
                    @if (isset($recentActivities) && count($recentActivities) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Aktivitas</th>
                                        <th>User</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentActivities as $activity)
                                        <tr>
                                            <td>{{ $activity->created_at->format('d/m/Y H:i') }}</td>
                                            <td>{{ $activity->description }}</td>
                                            <td>{{ $activity->user->name }}</td>
                                            <td>{{ $activity->status }}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-info">Tidak ada aktifitas terbaru</div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center">Tidak ada aktivitas terbaru</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Add any custom JavaScript here
    </script>
@endpush
