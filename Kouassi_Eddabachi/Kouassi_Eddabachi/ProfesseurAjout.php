<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="ProfesseurAjout.css">
    <script src="TD.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="#" alt="image">
        </div>
        <div class="navbar">
            <a href="#">Tableau de bord</a>
        </div>
    </div>
    <div class="container">
        <div class="left-panel">
            <h2>INFORMATIQUE :</h2>
            <form>
                <label>Nom d'evaluation :</label>
                <input type="text" placeholder="Nom evaluation">
                <label>Date d'evaluation :</label>
                <input type="date" placeholder="Date evaluation">
                <label>Note :</label>
                <input type="text" placeholder="Note">
                <label>Coefficient :</label>
                <input type="text" placeholder="Coeff">
                <label>Pénalité :</label>
                <input type="text" placeholder="Pénalité">
                <div class="buttons">
                    <button type="submit">Valider</button>
                    <button type="reset">Effacer</button>
                </div>
            </form>
        </div>
        <div class="right-panel-bg"></div>
        <div class="right-panel">
            <div class="header">
                <select name="select" id="tpSelect" onchange="showTable()">
                    <option value="TPA">TP A</option>
                    <option value="TPB">TP B</option>
                    <option value="TPC">TP C</option>
                </select>
            </div>
            <div id="TPA" class="table-container">
                <h2>TP A</h2>
                <table>
                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>
                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>

                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>

                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>
                </table>
            </div>
            <div id="TPB" class="table-container" style="display: none;">
                <h2>TP B</h2>
                <table>
                        <tr>
                            <th>veo</th>
                            <th>nolan</th>
                        </tr>
                </table>
            </div>
            <div id="TPC" class="table-container" style="display: none;">
                <h2>TP C</h2>
                <table>
                        <tr>
                            <th>kouassi</th>
                            <th> emmanuel</th>
                        </tr>
                </table>
            </div>
        </div>

        <div class="professor">
            <div class="professor-info">
                <img src="#" alt="Professor">
                <p>Sigalas Clement<br>Professeur</p>
            </div>
        </div>
    </div>
</body>
</html>