<?php
include_once("banco/conexao.php");
print_r($_SESSION);

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
                <li><a href="index.php?menuop=logout">Logout</a></li>
            </ul>
    </header> 
    <meta charset='utf-8' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link rel='stylesheet' href='css/home.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
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
          initialView: 'dayGridMonth',
          locale: 'pt-br',
          eventSources: [
            {
                url: 'event.php',
                textColor: 'white',
                color: 'blue'
            },
            {
                url: 'cont.php',
                textColor: 'white',
                color: 'green'
            }
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



