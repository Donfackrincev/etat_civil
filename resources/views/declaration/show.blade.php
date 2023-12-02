<head>
    <title>Curriculum vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('st.css')}}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="jquery.min.js_3.5.1/cdnjs/jquery.min.js">
</head>

<body>
    <div class="cv-container">
        <div class="left-column">

        </div>

        <div class="right-column">
            <div class="header">
                <img src="{{asset('deces.jpg')}}" alt="">
            </div>                
        
            <div class="content">
                <div class="section">
                
                    <label for="">Nom de l'enfant/name of child
                        <input type="text" {{ ($declaration->nom)}}>
                    </label> <br><br>

                    <label for="">Le/on the
                        <input type="text" {{ ($declaration->prenom)}}>
                    </label> <br><br>

                    <label for="">Est né à/was bon at
                        <input type="text" {{ ($declaration->sexe)}}>
                    </label> <br><br>

                    <label for="">nom de l'enfant/name of the child
                        <input type="text">
                    </label><br><br>

                    <label for="">De sexe/SEX
                        <input type="text">
                    </label><br><br>

                    <label for="">Nom du pere/name of father
                        <input type="text" >
                         <!-- style=" border: transparent;" -->
                    </label><br><br>

                    <label for="">Né à/born at
                        <input type="text">
                    </label><br><br>

                    <label for="">Le/on the
                        <input type="text">
                    </label><br><br>

                    <label for="">Nom de la mere/mother
                        <input type="text">
                    </label><br><br>

                    <label for="">Né a/born at
                        <input type="text">
                    </label><br><br>

                    <label for="">Le/on the
                        <input type="text">
                    </label><br><br>

                    <label for="">Domicile/reside at
                        <input type="text">
                    </label><br><br>

                    <label for="">Domicile/reside at
                        <input type="text">
                    </label><br><br>

                    <label for="">Dresser le/Drawn up on the
                        <input type="text">
                    </label><br><br>
                    <label for="">sur la declaration de
                        <input type="text">
                    </label><br><br>
                    <h4>Lesquels ont certifier la sinceriter de la presente declaration</h4>
                    <label for="">officier de l'etat civil
                        <input type="text">
                    </label><br><br>
                    <ul class="experience-list">

                    </ul>
                </div>
                <div class="section">

                </div>
            </div>
        </div>
    </div>
</body>