<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Centering styles */
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; /* Optional: Set a background color */
        }

        .id-card{
            border: 1px solid #ddd;
            width: fit-content;
        }

        .id-header{
            display: flex;
            justify-content: center;
            position: relative;
            background-color: #02283D;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
               padding-bottom: 4rem; 
        }

        .id-header .id-logo{
            position: absolute;
            top: 1rem;
            width: 120px;
        }

        .id-photo{
            border-radius: 50%;
            margin-top: 5rem;
            margin-bottom: -4rem;
            border: 10px solid #ddd;
            width: 150px;
            
        }

        .id-details{
            padding: 1rem;
            margin-top: 3rem;
        }

        .id-details h1{
            text-align: center;
            font-size: 1.5rem; 
            text-transform: uppercase;
            margin-bottom: 0.3rem;
        }

        .id-details h3{
            text-align: center;
            color: #ff0000;
            margin-top: 0;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .id-details .m-info{
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .id-details .m-info-group{
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .id-details .m-info-group .info-value{
            color: #8F6144;
            font-weight: 500;
        }

        .id-details .m-info-group .info-value.email{
            text-transform: lowercase;
        }

        .id-details .m-info-group h4{
            margin-bottom: 0;
            margin-top: 0.2rem
        }

        .id-details .m-qrcode{
            display: flex;
            justify-content: center;
            align-items: center
        }

        .id-details .m-qrcode img{
            width: 150px;
        }

        .id-footer{
            background-color: #02283D;
            color: #FFFFFF;
            text-align: center;
            padding: 0.3rem;
        }
            .take-attendance-button {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin: 1rem 0;
            background-color: #02283D;
            color: #FFFFFF;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .take-attendance-button:hover {
            background-color: #016fb9;
        }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="id-header">
            <!-- <img src="{{ asset('asset/images/smartschool.png') }}" class="id-logo" alt="logo"> -->
            <img class="id-photo" src="{{ asset('asset/images/Placeholder_Person.jpg') }}" alt="photo" />
        </div>
        <div class="id-details">
            <h1 class="m-name">{{ $student->name }}</h1>
            <h3 class="m-designation">Student - {{ $student->school_name ?? 'School Name' }}</h3>
            <div class="m-info">
                <div>
                    <div class="m-info-group">
                        <h4 class="info-label">ID Number: </h4>
                        <h4 class="info-value">{{ $student->id }}</h4>
                    </div>
                    <div class="m-info-group">
                        <h4 class="info-label">Phone: </h4>
                        <h4 class="info-value">{{ $student->phone_number }}</h4>
                    </div>
                    <div class="m-info-group">
                        <h4 class="info-label">Email: </h4>
                        <h4 class="info-value email">{{ $student->email }}</h4>
                    </div>
                    <div class="m-info-group">
                        <h4 class="info-label">Address: </h4>
                        <h4 class="info-value">{{ $student->address ?? 'Addis Ababa, Ethiopia' }}</h4>
                    </div>
                </div>
                <div class="m-qrcode">
                    <img src="{{ asset('asset/images/qrcode_image.png') }}" alt="qr-code">
                </div>
            </div>
              <form action="{{ route('take.attendance', ['id' => $student->id]) }}" method="POST">
                @csrf
                <button type="submit" class="take-attendance-button">Take Attendance</button>
            </form>
        </div>
        <div class="id-footer">
            www.smartschool.com
        </div>
    </div>
</body>
</html>
