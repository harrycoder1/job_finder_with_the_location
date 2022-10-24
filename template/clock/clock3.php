<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

html {
  font-size: 16px;
}

body {
  font-family: "Kulim Park", sans-serif;
  background-color: #f5f6f7;
  color: #4a5568;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem 2rem;
}

a {
  color: #4a5568;
}

.text-muted {
  color: #8fa3bc;
}

.t1 {
  font-size: 1.5rem;
}

.t2 {
  font-size: 1.25rem;
}

.t3 {
  font-size: 1rem;
}

.t4 {
  font-size: 0.85rem;
}

.t5 {
  font-size: 0.5rem;
}

.w-100 {
  width: 100%;
}

.container {
  height: 600px;
  width: 300px;
  padding: 1rem 1.5rem;
  border-radius: 3px;
  box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA;
}

nav {
  display: flex;
  justify-content: space-between;
}

.toggle-group label, .btn, button {
  color: inherit;
  position: relative;
  background: inherit;
  outline: none;
  border: none;
  box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA;
  border-radius: 3px;
  cursor: pointer;
  text-transform: uppercase;
}

.toggle-group input:checked + label::after, .btn.active::after, button:focus::after, button:active::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  border-radius: 3px;
  box-shadow: 2px 2px 2px 0px #DFE4EA inset, -2px -2px 2px 0px #ffffff inset;
}

button {
  padding: 0.5rem 0.75rem;
}
button svg.feather {
  color: #8fa3bc;
  width: 1.25rem;
  height: 1.25rem;
}

.btn {
  padding: 0.5rem 0.75rem;
}
.btn.active {
  color: #4a5568;
}
main {
  padding: 1.5rem 0.25rem;
}

.toggle-group {
  display: flex;
  justify-content: space-around;
}
.toggle-group label {
  flex: 1;
  padding: 0.75rem;
  text-align: center;
  border-radius: 8px;
}
.toggle-group label:first-of-type {
  margin-right: 1rem;
}
.toggle-group input {
  display: none;
}
.toggle-group input:checked + label::after {
  border-radius: 8px;
}

.chart {
  position: relative;
  border-radius: 50%;
  margin: 2rem;
  box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA;
  /* inner shadow */
}
.chart::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  margin: 3rem;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  box-shadow: 2px 2px 2px 0px #DFE4EA inset, -2px -2px 2px 0px #ffffff inset;
}
.chart .chart-label {
  position: absolute;
  top: 0;
  bottom: 0.5rem;
  left: 0;
  right: 0;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.chart .chart-label span {
  display: block;
}

#btntransactions {
  padding: 0.75rem;
}

#chartfill {
  animation: chart 500ms linear forwards;
}

@keyframes chart {
  from {
    stroke-dashoffset: 245;
  }
  to {
    stroke-dashoffset: 110;
  }
}
    </style>
</head>
<body>
<div class="container">
  <header>
    <nav>
      <button type="button"><i data-feather="arrow-left"></i></button>
      <button type="button"><i data-feather="search"></i></button>
    </nav>
  </header>
  <main>
    <h1 class="t1">History</h1>
    <div class="toggle-group">
      <input id="today-date" type="radio" name="date-choose">
      <label for="today-date" class="t4">Today</label>
      <input id="yesterday-date" type="radio" name="date-choose" checked>
      <label for="yesterday-date" class="t4">Yesterday</label>
    </div>
    <div class="chart">
      <div class="chart-label">
        <span class="t2">45%</span>
        <span class="text-muted">saving</span>
      </div>
      <svg class="progress" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
        <circle r="40" cx="50" cy="50" stroke-width="7" fill="transparent" stroke="#E2E8F0"></circle>
        <circle id="chartfill" r="40" cx="50" cy="50" stroke-width="7" stroke-dasharray="245" stroke-dashoffset="245" fill="transparent" stroke="#D53F8C" stroke-linecap="round" class="meter"></circle>
            </svg>
    </div>
    <button id="btntransactions" class="t4 w-100">Show my transactions</button>
  </main>
  <nav>
    <a href="#" class="btn text-muted"><i data-feather="home"></i></a>
    <a href="#" class="btn text-muted"><i data-feather="credit-card"></i></a>
    <a href="#" class="btn text-muted active"><i data-feather="trending-up"></i></a>
    <a href="#" class="btn text-muted"><i data-feather="bell"></i></a>
  </nav>
</div>
<script>
    (function() {
  feather.replace()  
})();
</script>
</body>
</html>