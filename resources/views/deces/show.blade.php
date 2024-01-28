<head>
    <title>Curriculum vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('deces.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="jquery.min.js_3.5.1/cdnjs/jquery.min.js">
    <style>
        form {
            max-width: 400px;
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
                <img src="{{ asset('vra.jpg') }}" alt="">
            </div>

            <div class="content">
                <center>
                    <table>
                        <tr>
                            <td></td>
                            <td> N°:{{ $deces->id }}</td>
                        </tr>
                        <tr>
                            <td> Nom du decedés/name of deceased</td>
                            <td>{{ $deces->nom_decedes }}</td>
                        </tr>
                        <tr>
                            <td> Le/on the:</td>
                            <td>{{ $deces->date_fabrication }}</td>
                        </tr>

                        <tr>
                            <td> Est decédé à/ died at:</td>
                            <td>{{ $deces->lieu_deces }}</td>
                        </tr>

                        <tr>
                            <td> LeAgé(e) de/aged:</td>
                            <td>{{ $deces->age_decedes }}</td>
                        </tr>

                        <tr>
                            <td> Domicilié à/ resident at:</td>
                            <td>{{ $deces->domicile_decedes }}</td>
                        </tr>

                        <tr>
                            <td> Fils ou Fille de/son or daughter of:</td>
                            <td>{{ $deces->nom_pere }}</td>
                        </tr>

                        <tr>
                            <td> Demeurant à/resident at:</td>
                            <td>{{ $deces->demeur_pere }}</td>
                        </tr>

                        <tr>
                            <td> Et de/and of:</td>
                            <td>{{ $deces->nom_mere }}</td>
                        </tr>

                        <tr>
                            <td> Demeurant à/resident at:</td>
                            <td>{{ $deces->demeur_mere }}</td>
                        </tr>
                        <tr>
                            <td> Dressé le/draw up on the:</td>
                            <td>{{ $deces->created_at }}</td>
                        </tr>
                   




                    </table>
                    <p class="lequel"><strong> Lesquels ont certifié la sinceriter de la presente declaration</strong>
                        <br>who attested the truth of this declaration
                        <br><strong> Par nous/by us:</strong>{{ $deces->employer->personne->nom }}
                    </p>
                    <table>
                        <tr>
                            <td> <strong>le declarant</strong> </td>
                            <td> <p style="text-align: right" ><strong> signature de l'officier</strong> </p></td>
                        </tr>
                    </table>
                </center>
                <div class="section">

                </div>
            </div>

        </div>

    </div>
</body>
