<head>
    <title>Curriculum vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('st.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="jquery.min.js_3.5.1/cdnjs/jquery.min.js">
    <style>
        form {
            max-width: 500px;
            margin: auto;
        }

        table {
            width: 110%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 0px solid black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;


        }

        th,
        td {
            padding: 5px;
            text-align: left;

        }

        th {}
    </style>
</head>

<body>
    <div class="cv-container">
        <div class="left-column">

        </div>

        <div class="right-column">
            <div class="header">
                <img src="{{ asset('Capture .jpg') }}" alt="">
            </div>

            <div class="content">
                <center>
                    <table>
                        <tr>
                            <td></td>
                            <td> N°:{{ $naissance->id }}</td>
                        </tr>

                        <tr>
                            <td> Nom de l'enfant/name of child:</td>
                            <td>{{ $naissance->nom_enfant }}</td>
                        </tr>

                        <tr>
                            <td> Le/on the:</td>
                            <td>{{ $naissance->date_naissance }}</td>
                        </tr>
                        <tr>
                            <td> Est né a/was born at:</td>
                            <td>{{ $naissance->lieu_naissance }}</td>
                        </tr>
                        <tr>
                            <td> Nom de l'enfant/name of child:</td>
                            <td>{{ $naissance->nom_enfant }}</td>
                        </tr>
                        <tr>
                            <td> De Sexe/sex:</td>
                            <td>{{ $naissance->sexe }}</td>
                        </tr>
                        <tr>
                            <td>De/of:</td>
                            <td>{{ $naissance->nom_pere }}</td>
                        </tr>
                        <tr>
                            <td> Né a/Born at:</td>
                            <td>{{ $naissance->lieu_naissance_pere }}</td>
                        </tr>
                        <tr>
                            <td>DLe/on the:</td>
                            <td>{{ $naissance->naissance_pere }}</td>
                        </tr>
                        <tr>
                            <td>Domicilié/Resident at:</td>
                            <td>{{ $naissance->domicile }}</td>
                        </tr>
                        <tr>
                            <td> profession/Occupation:</td>
                            <td>{{ $naissance->profession_pere }}</td>
                        </tr>
                        <tr>
                            <td> Et de/And of:</td>
                            <td>{{ $naissance->nom_mere }}</td>
                        </tr>
                        <tr>
                            <td> Née à/Born at:</td>
                            <td>{{ $naissance->lieu_naissance_mere }}</td>
                        </tr>
                        <tr>
                            <td> Le/On the:</td>
                            <td>{{ $naissance->naissance_mere }}</td>
                        </tr>
                        <tr>
                            <td>Domiciliée à/Resident at:</td>
                            <td>{{ $naissance->Domiciliere_mere }}</td>
                        </tr>
                        <tr>
                            <td> Profession /Occupation:</td>
                            <td>{{ $naissance->profession_mere }}</td>
                        </tr>
                        <tr>
                            <td> Sur la declarationde:</td>
                            <td>{{ $naissance->nom_enfant }}</td>
                        </tr>
                        <tr>



                    </table>
                    <p class="ont"><strong> Lesquels ont cert certifié la presente declaration</strong>
                        <br>Par nous: <strong>{{ $naissance->employer->personne->nom }} </strong> :officier d'etat
                        civil du centre de: <br>
                      <strong>  {{ $naissance->commune->nom_commune }}</strong>
                    </p>
                    <table>
                        <tr>
                            <td>signature de l'officier </td>
                            <td>signature du maire</td>
                        </tr>
                    </table>
                </center>
                <div class="section">

                </div>
            </div>

        </div>

    </div>
</body>
