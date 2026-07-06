<!DOCTYPE html>
<html>
<head>
    <title>Bantuan Sosial</title>

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }

    body{
        background:#f4f6f9;
    }

    /* ================= SIDEBAR ================= */

    .sidebar{
        width:220px;
        background:#1f2937;
        height:100vh;
        position:fixed;
        left:0;
        top:0;
        overflow:auto;
    }

    .sidebar h2{
        color:white;
        text-align:center;
        padding:20px;
        border-bottom:1px solid rgba(255,255,255,0.1);
    }

    .sidebar a{
        color:white;
        display:block;
        padding:15px 20px;
        text-decoration:none;
        transition:0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active{
        background:#3498db;
    }

    /* ================= CONTENT ================= */

    .content{
        margin-left:220px;
        padding:30px;
    }

    /* ================= HEADER ================= */

    .page-header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:20px;
    }

    .page-header h2{
        color:#2c3e50;
        font-size:30px;
    }

    /* ================= BUTTON ================= */

    .btn,
    .btn-aksi{
        background:#3498db;
        color:white;
        padding:10px 18px;
        border:none;
        border-radius:5px;
        text-decoration:none;
        cursor:pointer;
        display:inline-block;
        transition:0.3s;
        font-weight:bold;
    }

    .btn:hover,
    .btn-aksi:hover{
        background:#2980b9;
    }

    .btn-warning{
        background:#f39c12;
        color:white;
    }

    .btn-warning:hover{
        background:#d68910;
    }

    .btn-danger{
        background:#e74c3c;
        color:white;
    }

    .btn-danger:hover{
        background:#c0392b;
    }

    .btn-back{
        background:#6c757d;
        color:white;
        padding:10px 18px;
        border-radius:5px;
        text-decoration:none;
        font-weight:bold;
    }

    .btn-back:hover{
        background:#5a6268;
    }

    /* ================= STATUS SURVEY ================= */

    .status-layak{
        background:#28a745;
        color:white;
        padding:5px 12px;
        border-radius:20px;
        font-size:13px;
        font-weight:bold;
    }

    .status-tidak-layak{
        background:#dc3545;
        color:white;
        padding:5px 12px;
        border-radius:20px;
        font-size:13px;
        font-weight:bold;
    }

    /* ================= TABLE ================= */

    table{
        width:100%;
        border-collapse:collapse;
        background:white;
        margin-top:20px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
        border-radius:10px;
        overflow:hidden;
    }

    table,
    th,
    td{
        border:1px solid #ddd;
    }

    th{
        background:#3498db;
        color:white;
        padding:14px;
        text-align:center;
        font-size:15px;
    }

    td{
        padding:12px;
        text-align:center;
        height:50px;
    }

    tr:hover{
        background:#f2f2f2;
    }

    /* ================= EMPTY DATA ================= */

    .empty-data{
        text-align:center;
        color:#777;
        font-style:italic;
        padding:20px;
    }

    /* ================= FORM ================= */

    form,
    .card-form{
        background:white;
        padding:30px;
        border-radius:10px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    label{
        display:block;
        margin-bottom:8px;
        margin-top:15px;
        font-weight:bold;
    }

    input,
    select,
    textarea{
        width:100%;
        padding:10px;
        border:1px solid #ccc;
        border-radius:5px;
        margin-bottom:15px;
        outline:none;
    }

    input:focus,
    select:focus,
    textarea:focus{
        border-color:#3498db;
    }

    textarea{
        resize:none;
        min-height:120px;
    }

    /* ================= FOTO SURVEY & BANTUAN ================= */

    .foto-kosong{
        width:500px;
        height:300px;
        border:3px dashed #999;
        background:#f5f5f5;
        border-radius:10px;

        display:flex;
        justify-content:center;
        align-items:center;

        color:#666;
        font-size:20px;
        font-weight:bold;

        margin:20px auto;
    }

    /* ================= DASHBOARD ================= */

    .cards{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:20px;
        margin-top:20px;
    }

    .card{
        background:white;
        padding:25px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    .card h3{
        margin-bottom:10px;
        color:#555;
    }

    .card h1{
        color:#3498db;
        font-size:35px;
    }

    /* ================= RESPONSIVE ================= */

    @media(max-width:768px){

        .sidebar{
            width:100%;
            height:auto;
            position:relative;
        }

        .content{
            margin-left:0;
            padding:20px;
        }

        .page-header{
            flex-direction:column;
            gap:10px;
            align-items:flex-start;
        }

        .cards{
            grid-template-columns:1fr;
        }

        .foto-kosong{
            width:100%;
            height:250px;
        }

        table{
            display:block;
            overflow-x:auto;
        }

    }

    </style>
</head>

<body>

<div class="sidebar">

    <h2>Bantuan Sosial</h2>

    <a href="/dashboard">Dashboard</a>
    <a href="/warga">Data Warga</a>
    <a href="/survey">Data Survey</a>
    <a href="/bantuan">Penyaluran Bantuan</a>

</div>

<div class="content">

    @yield('content')

</div>

</body>
</html>