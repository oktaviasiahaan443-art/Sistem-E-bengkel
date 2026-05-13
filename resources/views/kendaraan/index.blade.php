<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #0f172a, #1e293b, #334155);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
            padding: 14px 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 28px;
            color: #ffffff !important;
            letter-spacing: 1px;
        }

        /* Card */
        .card-box {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            padding: 35px;
            border: none;
        }

        /* Title */
        h2 {
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0;
        }

        /* Table */
        .table {
            border-radius: 15px;
            overflow: hidden;
        }

        .table thead {
            background: linear-gradient(90deg, #0ea5e9, #2563eb);
            color: white;
            text-align: center;
        }

        .table thead th {
            border: none;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #eff6ff;
            transform: scale(1.003);
        }

        .table tbody td {
            vertical-align: middle;
            padding: 12px;
            border-color: #e5e7eb;
        }

        /* Buttons */
        .btn {
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }

        /* Button Tambah */
        .btn-add {
            background: linear-gradient(90deg, #10b981, #059669);
            color: white;
            padding: 10px 18px;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35);
        }

        .btn-add:hover {
            background: linear-gradient(90deg, #059669, #047857);
            color: white;
            transform: translateY(-2px);
        }

        /* Button Edit */
        .btn-edit {
            background: linear-gradient(90deg, #f59e0b, #d97706);
            color: white;
            box-shadow: 0 4px 10px rgba(245, 158, 11, 0.35);
        }

        .btn-edit:hover {
            background: linear-gradient(90deg, #d97706, #b45309);
            color: white;
            transform: translateY(-2px);
        }

        /* Button Hapus */
        .btn-delete {
            background: linear-gradient(90deg, #ef4444, #dc2626);
            color: white;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.35);
        }

        .btn-delete:hover {
            background: linear-gradient(90deg, #dc2626, #b91c1c);
            color: white;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .card-box {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }

            .navbar-brand {
                font-size: 22px;
            }

            .d-flex.justify-content-between {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                🚗 Sistem E-Bengkel
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5 mb-5">

        <div class="card-box">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Daftar Servis Kendaraan</h2>

                <a href="/kendaraan/create" class="btn btn-add">
                    + Tambah Kendaraan
                </a>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Plat Nomor</th>
                            <th>Nama Pemilik</th>
                            <th>Merk Kendaraan</th>
                            <th>Keluhan</th>
                            
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($data as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->plat_nomor }}</td>
                            <td>{{ $item->nama_pemilik }}</td>
                            <td>{{ $item->merk_kendaraan }}</td>
                            <td>{{ $item->keluhan }}</td>

                            <td>
                                
                                    </form>

                                </div>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                Belum ada data kendaraan.
                            </td>
                        </tr>
                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</body>

</html>