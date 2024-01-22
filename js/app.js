var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByTagName("button")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
function openModal() {
  modal.style.display = "block";
  // Add the "show" class to animate the modal
  setTimeout(function () {
    modal.querySelector('.modal-content').classList.add('show');
  }, 10);
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
  modal.querySelector('.modal-content').classList.remove('show');
  // Remove the "show" class to animate the modal
  setTimeout(function () {
    modal.style.display = "none";
  }, 300); // Wait for the animation to finish
}
function setgender(a) {
  document.getElementById('gender').value = a;
  $("." + a).addClass("active");
  var abc = a == 'Male' ? 'Female' : 'Male';
  $("." + abc).removeClass("active");
}
function openBirthdayModal() {
  document.getElementById("myBirthdayModal").style.display = "block";
  // Add the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myBirthdayModal").querySelector('.birthday-modal-content').classList.add('show');
  }, 10);
}

function openHeightModal() {
  document.getElementById("myHeightModal").style.display = "block";
  // Add the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myHeightModal").querySelector('.height-modal-content').classList.add('show');
  }, 10);
  // to focus height input box
  $("#heightmanual").focus();
}

function openWeightModal() {
  document.getElementById("myWeightModal").style.display = "block";
  // Add the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myWeightModal").querySelector('.weight-modal-content').classList.add('show');
  }, 10);
}


function closeBirthdayModal() {
  document.getElementById("myBirthdayModal").querySelector('.birthday-modal-content').classList.remove('show');
  // Remove the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myBirthdayModal").style.display = "none";
  }, 300); // Wait for the animation to finish
}

function closeHeightModal() {
  document.getElementById("myHeightModal").querySelector('.height-modal-content').classList.remove('show');
  // Remove the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myHeightModal").style.display = "none";
  }, 300); // Wait for the animation to finish
}

function closeWeightModal() {
  document.getElementById("myWeightModal").querySelector('.weight-modal-content').classList.remove('show');
  // Remove the "show" class to animate the modal
  setTimeout(function () {
    document.getElementById("myWeightModal").style.display = "none";
  }, 300); // Wait for the animation to finish
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal || event.target == document.getElementById("myBirthdayModal") || event.target == document.getElementById("myHeightModal") || event.target == document.getElementById("myWeightModal")
  ) {
    closeModal();
    closeBirthdayModal();
    closeHeightModal();
    closeWeightModal();
  }
}

// Calendar 
//check the console for date click event
//Fixed day highlight
//Added previous month and next month view

function CalendarControl() {
  let dbirth = document.getElementById("birthdate").innerText;
  if (dbirth === "0000-00-00" || dbirth == null) {
    dbirth = new Date();
  }
  const calendar = new Date(dbirth);

  const calendarControl = {
    localDate: new Date(dbirth),
    prevMonthLastDate: null,
    calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
    calMonthName: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec"
    ],
    daysInMonth: function (month, year) {
      return new Date(year, month, 0).getDate();
    },
    firstDay: function () {
      return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
    },
    lastDay: function () {
      return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
    },
    firstDayNumber: function () {
      return calendarControl.firstDay().getDay() + 1;
    },
    lastDayNumber: function () {
      return calendarControl.lastDay().getDay() + 1;
    },
    getPreviousMonthLastDate: function () {
      let lastDate = new Date(
        calendar.getFullYear(),
        calendar.getMonth(),
        0
      ).getDate();
      return lastDate;
    },
    navigateToPreviousMonth: function () {
      calendar.setMonth(calendar.getMonth() - 1);
      calendarControl.attachEventsOnNextPrev();
    },
    navigateToNextMonth: function () {
      calendar.setMonth(calendar.getMonth() + 1);
      calendarControl.attachEventsOnNextPrev();
    },
    navigateToCurrentMonth: function () {
      let currentMonth = calendarControl.localDate.getMonth();
      let currentYear = calendarControl.localDate.getFullYear();
      calendar.setMonth(currentMonth);
      calendar.setYear(currentYear);
      calendarControl.attachEventsOnNextPrev();
    },
    displayYear: function () {
      let yearLabel = document.querySelector(".calendar .calendar-year-label");
      yearLabel.innerHTML = calendar.getFullYear();
    },
    displayMonth: function () {
      let monthLabel = document.querySelector(
        ".calendar .calendar-month-label"
      );
      monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
    },
    selectDate: function (e) {
      //changes on 3rd april 2023
      let selectedDate = document.querySelector(".calendar-selected");
      if (selectedDate) {
        selectedDate.classList.remove("calendar-selected");
      }
      e.target.parentNode.classList.add("calendar-selected");
      //changes on 3rd april 2023
      var date = `${calendar.getFullYear()}-${calendar.getMonth() + 1}-${e.target.textContent}`;
      $("#birthday-input").val(date);
    },
    //
    // plotSelectors: function () {
    //   document.querySelector(
    //     ".calendar"
    //   ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
    //     <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#fff" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
    //     <div class="calendar-year-month">
    //     <div class="calendar-month-label"></div>
    //     <div>-</div>
    //     <div class="calendar-year-label"></div>
    //     </div>
    //     <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#fff" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
    //     </div>
    //     <div class="calendar-today-date">Current : 
    //       ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]} 
    //       ${calendarControl.localDate.getDate()}, 
    //       ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
    //       ${calendarControl.localDate.getFullYear()}
    //     </div>
    //     <div class="calendar-body"></div></div>`;
    // },
    //
    plotSelectors: function () {
      document.querySelector(".calendar").innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#fff" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
            <div class="calendar-month-selector">
              <select class="calendar-month-select"></select>
            </div>
            <div>
              <select class="calendar-year-select"></select>
            </div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#fff" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
        </div>
        <div class="calendar-today-date">Selected: 
          ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]} 
          ${calendarControl.localDate.getDate()}, 
          ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
          ${calendarControl.localDate.getFullYear()}
        </div>
        <div class="calendar-body"></div></div>`;

      // Add options to the month selector dropdown
      let monthSelect = document.querySelector(".calendar-month-select");
      for (let i = 0; i < calendarControl.calMonthName.length; i++) {
        let option = document.createElement("option");
        option.value = i;
        option.text = calendarControl.calMonthName[i];
        monthSelect.appendChild(option);
      }
      monthSelect.selectedIndex = calendar.getMonth();

      // Add options to the year selector dropdown
      let yearSelect = document.querySelector(".calendar-year-select");
      let currentYear = new Date().getFullYear();
      for (let i = currentYear; i >= 1940; i--) {
        let option = document.createElement("option");
        option.value = i;
        option.text = i;
        yearSelect.appendChild(option);
      }
      let options = yearSelect.options;
      for (let i = 0; i < options.length; i++) {
        if (options[i].value == calendar.getFullYear()) {
          yearSelect.selectedIndex = i;
          break;
        }
      }

    },
    plotDayNames: function () {
      for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
        document.querySelector(
          ".calendar .calendar-body"
        ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
      }
    },
    plotDates: function () {
      document.querySelector(".calendar .calendar-body").innerHTML = "";
      calendarControl.plotDayNames();
      calendarControl.displayMonth();
      calendarControl.displayYear();
      let count = 1;
      let prevDateCount = 0;

      calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
      let prevMonthDatesArray = [];
      let calendarDays = calendarControl.daysInMonth(
        calendar.getMonth() + 1,
        calendar.getFullYear()
      );
      // dates of current month
      for (let i = 1; i < calendarDays; i++) {
        if (i < calendarControl.firstDayNumber()) {
          prevDateCount += 1;
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="prev-dates"></div>`;
          prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
        } else {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item ${count == calendar.getDate() ? 'calendar-selected':''}" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
      }
      //remaining dates after month dates
      for (let j = 0; j < prevDateCount + 1; j++) {
        document.querySelector(
          ".calendar .calendar-body"
        ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
      }
      calendarControl.highlightToday();
      calendarControl.plotPrevMonthDates(prevMonthDatesArray);
      calendarControl.plotNextMonthDates();
    },
    attachEvents: function () {
      let prevBtn = document.querySelector(".calendar .calendar-prev a");
      let nextBtn = document.querySelector(".calendar .calendar-next a");
      let todayDate = document.querySelector(".calendar .calendar-today-date");
      //
      let monthSelect = document.querySelector(".calendar-month-select");
      let yearSelect = document.querySelector(".calendar-year-select");
      //
      let dateNumber = document.querySelectorAll(".calendar .dateNumber");
      prevBtn.addEventListener(
        "click",
        calendarControl.navigateToPreviousMonth
      );
      nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
      todayDate.addEventListener(
        "click",
        calendarControl.navigateToCurrentMonth
      );
      // Listen for changes to the month and year dropdowns and update the calendar
      monthSelect.addEventListener("change", function () {
        let selectedMonth = parseInt(this.value);
        calendar.setMonth(selectedMonth);
        calendarControl.attachEventsOnNextPrev();
      });
      yearSelect.addEventListener("change", function () {
        let selectedYear = parseInt(this.value);
        calendar.setYear(selectedYear);
        calendarControl.attachEventsOnNextPrev();
      });
      //
      for (var i = 0; i < dateNumber.length; i++) {
        dateNumber[i].addEventListener(
          "click",
          calendarControl.selectDate,
          false
        );
      }
    },
    highlightToday: function () {
      let currentMonth = calendarControl.localDate.getMonth() + 1;
      let changedMonth = calendar.getMonth() + 1;
      let currentYear = calendarControl.localDate.getFullYear();
      let changedYear = calendar.getFullYear();
      if (
        currentYear === changedYear &&
        currentMonth === changedMonth &&
        document.querySelectorAll(".number-item")
      ) {
        document
          .querySelectorAll(".number-item")
        [calendar.getDate() - 1].classList.add("calendar-today");
      }
    },
    plotPrevMonthDates: function (dates) {
      dates.reverse();
      for (let i = 0; i < dates.length; i++) {
        if (document.querySelectorAll(".prev-dates")) {
          document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
        }
      }
    },
    plotNextMonthDates: function () {
      let childElemCount = document.querySelector('.calendar-body').childElementCount;
      //7 lines
      if (childElemCount > 42) {
        let diff = 49 - childElemCount;
        calendarControl.loopThroughNextDays(diff);
      }

      //6 lines
      if (childElemCount > 35 && childElemCount <= 42) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
      }

    },
    loopThroughNextDays: function (count) {
      if (count > 0) {
        for (let i = 1; i <= count; i++) {
          document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
        }
      }
    },
    attachEventsOnNextPrev: function () {
      calendarControl.plotDates();
      calendarControl.attachEvents();
    },
    init: function () {
      calendarControl.plotSelectors();
      calendarControl.plotDates();
      calendarControl.attachEvents();
    }
  };
  calendarControl.init();
}

const calendarControl = new CalendarControl();

//weight working slider

$("#slider").roundSlider({
  radius: 72,
  circleShape: "half-top",
  sliderType: "min-range",
  mouseScrollAction: true,
  value: $("#weight").html(),
  handleSize: "+5",
  min: 30,
  max: 200
});
