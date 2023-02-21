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
          initialView: 'dayGridMonth',
          locale: 'pt-br',
          eventSources: [
            {
            url: 'eventos_json.php',
            method: 'GET',
            extraParams: {
              custom_param: 'something'
            },
            failure: function() {
              alert('Erro ao carregar eventos!');
            },
            color: 'black',  
            },
            {
            url: 'contatos_json.php',
            method: 'GET',
            extraParams: {
              custom_param: 'something'
            },
            failure: function() {
              alert('Erro ao carregar contatos!');
            },
            color: 'blue',
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



