<?php
include_once("banco/conexao.php");

?>
<!DOCTYPE html>
<html lang='en'>
  <head>
  <header class="header">
        <h1>Contatos</h1>
            <h1 class="logo"><a href="#">Agenda online</a></h1>
            <ul class="main-nav">
                <li><a href="index.php?menuop=home">Home</a></li>
                <li><a href="index.php?menuop=eventos">Eventos</a></li>
                <li><a href="index.php?menuop=contatos">Contatos</a></li>
                <?php
                    session_start(); // iniciar a sessão

                    if ($_SESSION['logado'] == true) {
                        // código HTML a ser exibido se o usuário estiver logado
                    ?>
                        <li><a href="index.php?menuop=logout">Logout</a></li>
                    <?php
                    } else { $_SESSION['logado'] == false;
                        // código HTML a ser exibido se o usuário não estiver logado
                    ?>
                        <li><a href="index.php?menuop=usuarios">Login</a></li>
                    <?php
                    }
                    ?>
            </ul>
    </header> 
    <meta charset='utf-8' />
    <link rel='stylesheet' href='css/home.css' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script src='js/fullCalendar/dist/index.global.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          header: 'auto',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'listMonth,listYear, listDay, listWeek'
          },
           views: {
            listMonth: { buttonText: 'Mês' },
            listYear: { buttonText: 'Ano' },
            listDay: { buttonText: 'Dia' },
            listWeek: { buttonText: 'Semana' }
          },
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours
          editable: true,
          selectable: true,
          selectMirror: true,
          dayMaxEvents: true,
          select: function(arg) {
            var title = prompt('Título do Evento:');
            if (title) {
              calendar.addEvent({
                title: title,
                start: arg.start,
                end: arg.end,
                allDay: arg.allDay
              })
            }
            calendar.unselect()
          },
          eventClick: function(arg) {
            if (confirm('Deseja excluir este evento?')) {
              arg.event.remove()
            }
          },
          events: [
          {
          nomeEvento: 'título do evento',
          localEvento: 'local do evento',
          dataEvento: 'data do evento',
          horaEvento: 'hora do evento',
          tipoEvento: 'tipo do evento',
          organizadorEvento: 'organizador do evento',
          telefoneEvento: 'telefone do evento',
          },
          ],
          initialView: 'dayGridMonth',
          locale: 'pt-br',
          eventSources: [
            <?php include 'eventos_json.php'; ?>
            <?php include 'contatos_json.php'; ?>
          ]
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>



