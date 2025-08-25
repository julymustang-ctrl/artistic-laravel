@extends('admin.layout')

@section('title', 'Services Management')
@section('page-title', 'Services')

@section('page-actions')
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Add Service
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">All Services</h5>
        </div>
        <div class="card-body">
            @if($services->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Order</th>
                                <th>Created</th>
                                <th width="200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>
                                        <strong>{{ $service->title }}</strong><br>
                                        <small class="text-muted">{{ $service->slug }}</small>
                                    </td>
                                    <td>{{ Str::limit($service->description, 80) }}</td>
                                    <td>
                                        @if($service->price)
                                            ${{ number_format($service->price, 2) }}
                                        @else
                                            <span class="text-muted">Not set</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $service->is_active ? 'success' : 'secondary' }}">
                                            {{ $service->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($service->featured)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                    </td>
                                    <td>{{ $service->sort_order }}</td>
                                    <td>{{ $service->created_at->format('M d, Y') }}</td>
                                    <td class="table-actions">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.services.show', $service) }}" class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this service?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                {{ $services->links() }}
            @else
                <div class="text-center py-4">
                    <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                    <h5>No Services Found</h5>
                    <p class="text-muted">Start by creating your first service.</p>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add Service
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection