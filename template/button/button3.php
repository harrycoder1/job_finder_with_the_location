<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

.wrapper-no4 {
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, #BEEDFF, white);
  height: 100vh;
  width: 100vw;
  max-width: 100%;
  overflow: hidden;
}
.wrapper-no4 .button-bird {
  width: 300px;
  height: 88px;
  background-color: #131335;
  border-radius: 5px;
  position: absolute;
  top: 50%;
  opacity: 1;
  transform: translateY(-50%);
  padding: 0;
  border: none;
  display: flex;
  justify-content: center;
  cursor: pointer;
}
.wrapper-no4 .button-bird__text {
  text-align: center;
  font-size: 20px;
  font-family: Helvetica, Arial, sans-serif;
  color: #BEEDFF;
  position: absolute;
  z-index: 1000;
  top: 50%;
  margin: 0;
  transform: translateY(-50%);
}
.wrapper-no4 .button-bird:focus {
  outline: none;
}
.wrapper-no4 .button-bird:hover .bird--30 {
  left: 600px;
  top: -550px;
  opacity: 0;
  transition: left 1.5s cubic-bezier(0.42, 0, 0.58, 1), top 1.5s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.5s linear 1s;
}
.wrapper-no4 .button-bird:hover .bird--30:after {
  left: 50px;
  top: 50px;
  transition: all 1.5s cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .button-bird:hover .bird--30:before {
  left: -50px;
  top: 50px;
  transition: all 1.5s cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .button-bird .feather {
  position: absolute;
  width: 18%;
  left: 40%;
  top: 12px;
  display: none;
  opacity: 0;
  fill: #131335;
}
.wrapper-no4 .button-bird.active {
  background-color: transparent;
  transition: all 0.2s linear 0.1s;
}
.wrapper-no4 .button-bird.active .button-bird__text {
  color: #131335;
  -webkit-animation: text-fade 1.5s 0.2s;
          animation: text-fade 1.5s 0.2s;
}
.wrapper-no4 .button-bird.active .feather {
  display: block;
  -webkit-animation: feather-fade 1.5s linear 0.5s forwards;
          animation: feather-fade 1.5s linear 0.5s forwards;
}
.wrapper-no4 .button-bird.active .bird--20,
.wrapper-no4 .button-bird.active .bird--19,
.wrapper-no4 .button-bird.active .bird--18,
.wrapper-no4 .button-bird.active .bird--21,
.wrapper-no4 .button-bird.active .bird--23,
.wrapper-no4 .button-bird.active .bird--25,
.wrapper-no4 .button-bird.active .bird--30 {
  left: 600px;
  top: -550px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1), top 2s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.5s linear 1.5s;
}
.wrapper-no4 .button-bird.active .bird--5,
.wrapper-no4 .button-bird.active .bird--17,
.wrapper-no4 .button-bird.active .bird--16,
.wrapper-no4 .button-bird.active .bird--15,
.wrapper-no4 .button-bird.active .bird--22 {
  left: 600px;
  top: -600px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1) 0.1s, top 2s cubic-bezier(0.42, 0, 0.58, 1) 0.1s, opacity 0.5s linear 1.6s;
}
.wrapper-no4 .button-bird.active .bird--14,
.wrapper-no4 .button-bird.active .bird--13,
.wrapper-no4 .button-bird.active .bird--12,
.wrapper-no4 .button-bird.active .bird--24,
.wrapper-no4 .button-bird.active .bird--1 {
  left: 650px;
  top: -650px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1) 0.15s, top 2s cubic-bezier(0.42, 0, 0.58, 1) 0.15s, opacity 0.5s linear 1.65s;
}
.wrapper-no4 .button-bird.active .bird--11,
.wrapper-no4 .button-bird.active .bird--10,
.wrapper-no4 .button-bird.active .bird--9,
.wrapper-no4 .button-bird.active .bird--26,
.wrapper-no4 .button-bird.active .bird--27 {
  left: 650px;
  top: -700px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1) 0.2s, top 2s cubic-bezier(0.42, 0, 0.58, 1) 0.2s, opacity 0.5s linear 1.7s;
}
.wrapper-no4 .button-bird.active .bird--8,
.wrapper-no4 .button-bird.active .bird--7,
.wrapper-no4 .button-bird.active .bird--6,
.wrapper-no4 .button-bird.active .bird--28 {
  left: 700px;
  top: -750px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1) 0.25s, top 2s cubic-bezier(0.42, 0, 0.58, 1) 0.25s, opacity 0.5s linear 1.75s;
}
.wrapper-no4 .button-bird.active .bird,
.wrapper-no4 .button-bird.active .bird--4,
.wrapper-no4 .button-bird.active .bird--29,
.wrapper-no4 .button-bird.active .bird--3 {
  left: 750px;
  top: -800px;
  opacity: 0;
  transition: left 2s cubic-bezier(0.42, 0, 0.58, 1) 0.3s, top 2s cubic-bezier(0.42, 0, 0.58, 1) 0.3s, opacity 0.5s linear 1.8s;
}
.wrapper-no4 .button-bird.active .bird--2 {
  left: 850px;
  top: -850px;
  opacity: 0;
  transition: left 1.5s cubic-bezier(0.42, 0, 0.58, 1) 0.35s, top 1.5s cubic-bezier(0.42, 0, 0.58, 1) 0.35s, opacity 0.5s linear 1.8s;
}
.wrapper-no4 .button-bird.active .bird--5:after,
.wrapper-no4 .button-bird.active .bird--4:after,
.wrapper-no4 .button-bird.active .bird--8:after,
.wrapper-no4 .button-bird.active .bird--14:before,
.wrapper-no4 .button-bird.active .bird--16:after,
.wrapper-no4 .button-bird.active .bird--17:before,
.wrapper-no4 .button-bird.active .bird--21:after,
.wrapper-no4 .button-bird.active .bird--30:after,
.wrapper-no4 .button-bird.active .bird--30:before {
  left: 50px;
  top: -100px;
  transition: all 1s cubic-bezier(0.42, 0, 0.58, 1) -0.3s;
}
.wrapper-no4 .button-bird.active .bird--4:before,
.wrapper-no4 .button-bird.active .bird--7:before,
.wrapper-no4 .button-bird.active .bird--9:after,
.wrapper-no4 .button-bird.active .bird--12:before,
.wrapper-no4 .button-bird.active .bird--13:before,
.wrapper-no4 .button-bird.active .bird--18:after,
.wrapper-no4 .button-bird.active .bird--27:after,
.wrapper-no4 .button-bird.active .bird--26:before {
  left: -50px;
  top: 0px;
  transition: all ss cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .button-bird.active .bird:before,
.wrapper-no4 .button-bird.active .bird--2:after,
.wrapper-no4 .button-bird.active .bird--1:after,
.wrapper-no4 .button-bird.active .bird--7:after,
.wrapper-no4 .button-bird.active .bird--8:before,
.wrapper-no4 .button-bird.active .bird--15:after,
.wrapper-no4 .button-bird.active .bird--19:before,
.wrapper-no4 .button-bird.active .bird--22:after,
.wrapper-no4 .button-bird.active .bird--28:after,
.wrapper-no4 .button-bird.active .bird--28:before,
.wrapper-no4 .button-bird.active .bird--3:after {
  left: 100px;
  top: -100px;
  transition: all 1s cubic-bezier(0.42, 0, 0.58, 1) 0s;
}
.wrapper-no4 .button-bird.active .bird--2:before,
.wrapper-no4 .button-bird.active .bird--1:before,
.wrapper-no4 .button-bird.active .bird--9:before,
.wrapper-no4 .button-bird.active .bird--12:after,
.wrapper-no4 .button-bird.active .bird--13:after,
.wrapper-no4 .button-bird.active .bird--17:after,
.wrapper-no4 .button-bird.active .bird--19:before,
.wrapper-no4 .button-bird.active .bird--23:after,
.wrapper-no4 .button-bird.active .bird--23:before {
  left: 50px;
  top: -10px;
  transition: all 2s cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .button-bird.active .bird:after,
.wrapper-no4 .button-bird.active .bird--6:before,
.wrapper-no4 .button-bird.active .bird--10:after,
.wrapper-no4 .button-bird.active .bird--11:after,
.wrapper-no4 .button-bird.active .bird--16:before,
.wrapper-no4 .button-bird.active .bird--18:before,
.wrapper-no4 .button-bird.active .bird--20:before,
.wrapper-no4 .button-bird.active .bird--24:before,
.wrapper-no4 .button-bird.active .bird--26:after,
.wrapper-no4 .button-bird.active .bird--27:before {
  left: 50px;
  top: 50px;
  transition: all 2s cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .button-bird.active .bird--3:before,
.wrapper-no4 .button-bird.active .bird--6:after,
.wrapper-no4 .button-bird.active .bird--10:before,
.wrapper-no4 .button-bird.active .bird--11:before,
.wrapper-no4 .button-bird.active .bird--14:after,
.wrapper-no4 .button-bird.active .bird--15:before,
.wrapper-no4 .button-bird.active .bird--20:after,
.wrapper-no4 .button-bird.active .bird--22:before,
.wrapper-no4 .button-bird.active .bird--24:after,
.wrapper-no4 .button-bird.active .bird--25:after,
.wrapper-no4 .button-bird.active .bird--25:before,
.wrapper-no4 .button-bird.active .bird--5:before {
  left: 100px;
  top: -10px;
  transition: all 2s cubic-bezier(0.42, 0, 0.58, 1) -0.5s;
}
.wrapper-no4 .bird,
.wrapper-no4 .bird:before,
.wrapper-no4 .bird:after,
.wrapper-no4 .bird--1,
.wrapper-no4 .bird--1:after,
.wrapper-no4 .bird--1:before,
.wrapper-no4 .bird--2,
.wrapper-no4 .bird--2:after,
.wrapper-no4 .bird--2:before,
.wrapper-no4 .bird--3,
.wrapper-no4 .bird--3:after,
.wrapper-no4 .bird--3:before,
.wrapper-no4 .bird--4,
.wrapper-no4 .bird--4:after,
.wrapper-no4 .bird--4:before,
.wrapper-no4 .bird--5,
.wrapper-no4 .bird--5:after,
.wrapper-no4 .bird--5:before,
.wrapper-no4 .bird--6,
.wrapper-no4 .bird--6:after,
.wrapper-no4 .bird--6:before,
.wrapper-no4 .bird--7,
.wrapper-no4 .bird--7:after,
.wrapper-no4 .bird--7:before,
.wrapper-no4 .bird--8,
.wrapper-no4 .bird--8:after,
.wrapper-no4 .bird--8:before,
.wrapper-no4 .bird--9,
.wrapper-no4 .bird--9:after,
.wrapper-no4 .bird--9:before,
.wrapper-no4 .bird--10,
.wrapper-no4 .bird--10:after,
.wrapper-no4 .bird--10:before,
.wrapper-no4 .bird--11,
.wrapper-no4 .bird--11:after,
.wrapper-no4 .bird--11:before,
.wrapper-no4 .bird--12,
.wrapper-no4 .bird--12:after,
.wrapper-no4 .bird--12:before,
.wrapper-no4 .bird--13,
.wrapper-no4 .bird--13:after,
.wrapper-no4 .bird--13:before,
.wrapper-no4 .bird--14,
.wrapper-no4 .bird--14:after,
.wrapper-no4 .bird--14:before,
.wrapper-no4 .bird--15,
.wrapper-no4 .bird--15:after,
.wrapper-no4 .bird--15:before,
.wrapper-no4 .bird--16,
.wrapper-no4 .bird--16:after,
.wrapper-no4 .bird--16:before,
.wrapper-no4 .bird--17,
.wrapper-no4 .bird--17:after,
.wrapper-no4 .bird--17:before,
.wrapper-no4 .bird--18,
.wrapper-no4 .bird--18:after,
.wrapper-no4 .bird--18:before,
.wrapper-no4 .bird--19,
.wrapper-no4 .bird--19:after,
.wrapper-no4 .bird--19:before,
.wrapper-no4 .bird--20,
.wrapper-no4 .bird--20:after,
.wrapper-no4 .bird--20:before,
.wrapper-no4 .bird--21,
.wrapper-no4 .bird--21:after,
.wrapper-no4 .bird--21:before,
.wrapper-no4 .bird--22,
.wrapper-no4 .bird--22:after,
.wrapper-no4 .bird--22:before,
.wrapper-no4 .bird--23,
.wrapper-no4 .bird--23:after,
.wrapper-no4 .bird--23:before,
.wrapper-no4 .bird--24,
.wrapper-no4 .bird--24:after,
.wrapper-no4 .bird--24:before,
.wrapper-no4 .bird--25,
.wrapper-no4 .bird--25:after,
.wrapper-no4 .bird--25:before,
.wrapper-no4 .bird--26,
.wrapper-no4 .bird--26:after,
.wrapper-no4 .bird--26:before,
.wrapper-no4 .bird--27,
.wrapper-no4 .bird--27:after,
.wrapper-no4 .bird--27:before,
.wrapper-no4 .bird--28,
.wrapper-no4 .bird--28:after,
.wrapper-no4 .bird--28:before,
.wrapper-no4 .bird--29,
.wrapper-no4 .bird--29:after,
.wrapper-no4 .bird--29:before,
.wrapper-no4 .bird--30,
.wrapper-no4 .bird--30:after,
.wrapper-no4 .bird--30:before {
  opacity: 1;
  display: block;
  position: absolute;
  background-image: url("http://cfriedri.ch/codepen/04/birds.svg");
  background-size: auto 100%;
  width: 60px;
  height: 33px;
  top: 0;
  left: 0;
  -webkit-animation-name: fly-cycle;
          animation-name: fly-cycle;
  -webkit-animation-timing-function: steps(3);
          animation-timing-function: steps(3);
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}
.wrapper-no4 .bird--1:after,
.wrapper-no4 .bird--1:before,
.wrapper-no4 .bird--2:after,
.wrapper-no4 .bird--2:before,
.wrapper-no4 .bird--4:after,
.wrapper-no4 .bird--4:before,
.wrapper-no4 .bird--5:after,
.wrapper-no4 .bird--5:before,
.wrapper-no4 .bird--7:after,
.wrapper-no4 .bird--7:before,
.wrapper-no4 .bird--8:after,
.wrapper-no4 .bird--8:before,
.wrapper-no4 .bird--10:after,
.wrapper-no4 .bird--10:before,
.wrapper-no4 .bird--11:after,
.wrapper-no4 .bird--11:before,
.wrapper-no4 .bird--13:after,
.wrapper-no4 .bird--13:before,
.wrapper-no4 .bird--14:after,
.wrapper-no4 .bird--14:before,
.wrapper-no4 .bird--16:after,
.wrapper-no4 .bird--16:before,
.wrapper-no4 .bird--17:after,
.wrapper-no4 .bird--17:before,
.wrapper-no4 .bird--18,
.wrapper-no4 .bird--18:after,
.wrapper-no4 .bird--18:before,
.wrapper-no4 .bird--19,
.wrapper-no4 .bird--19:after,
.wrapper-no4 .bird--19:before,
.wrapper-no4 .bird--20:after,
.wrapper-no4 .bird--20:before,
.wrapper-no4 .bird--21,
.wrapper-no4 .bird--21:after,
.wrapper-no4 .bird--21:before,
.wrapper-no4 .bird--22,
.wrapper-no4 .bird--22:after,
.wrapper-no4 .bird--22:before,
.wrapper-no4 .bird--23,
.wrapper-no4 .bird--23:after,
.wrapper-no4 .bird--23:before,
.wrapper-no4 .bird--24,
.wrapper-no4 .bird--24:after,
.wrapper-no4 .bird--24:before,
.wrapper-no4 .bird--25,
.wrapper-no4 .bird--25:after,
.wrapper-no4 .bird--25:before,
.wrapper-no4 .bird--26,
.wrapper-no4 .bird--26:after,
.wrapper-no4 .bird--26:before,
.wrapper-no4 .bird--27,
.wrapper-no4 .bird--27:after,
.wrapper-no4 .bird--27:before,
.wrapper-no4 .bird--28,
.wrapper-no4 .bird--28:after,
.wrapper-no4 .bird--28:before,
.wrapper-no4 .bird--29,
.wrapper-no4 .bird--29:after,
.wrapper-no4 .bird--29:before,
.wrapper-no4 .bird--30,
.wrapper-no4 .bird--30:after,
.wrapper-no4 .bird--30:before {
  width: 30px;
  height: 33px;
  top: -8px;
  left: 8px;
  z-index: -100;
}
.wrapper-no4 .bird--21,
.wrapper-no4 .bird--22,
.wrapper-no4 .bird--23,
.wrapper-no4 .bird--24,
.wrapper-no4 .bird--25,
.wrapper-no4 .bird--26,
.wrapper-no4 .bird--27,
.wrapper-no4 .bird--28,
.wrapper-no4 .bird--29 {
  top: 0;
}
.wrapper-no4 .bird--22,
.wrapper-no4 .bird--25,
.wrapper-no4 .bird--28 {
  top: 25px;
}
.wrapper-no4 .bird--23,
.wrapper-no4 .bird--26,
.wrapper-no4 .bird--29 {
  top: 45px;
}
.wrapper-no4 .bird--24,
.wrapper-no4 .bird--25,
.wrapper-no4 .bird--26 {
  left: 133px;
}
.wrapper-no4 .bird--27,
.wrapper-no4 .bird--28,
.wrapper-no4 .bird--29 {
  left: 256px;
}
.wrapper-no4 .bird--18 {
  top: 0;
  left: 0;
}
.wrapper-no4 .bird--18:after,
.wrapper-no4 .bird--18:before {
  left: -20px;
}
.wrapper-no4 .bird--19:after,
.wrapper-no4 .bird--19:before {
  left: -10px;
}
.wrapper-no4 .bird--1:before,
.wrapper-no4 .bird--4:before,
.wrapper-no4 .bird--7:before,
.wrapper-no4 .bird--10:before,
.wrapper-no4 .bird--13:before,
.wrapper-no4 .bird--16:before,
.wrapper-no4 .bird--19:before {
  top: 18px;
}
.wrapper-no4 .bird--2:after,
.wrapper-no4 .bird--5:after,
.wrapper-no4 .bird--8:after,
.wrapper-no4 .bird--11:after,
.wrapper-no4 .bird--14:after,
.wrapper-no4 .bird--17:after,
.wrapper-no4 .bird--20:after {
  top: -18px;
  left: 12px;
}
.wrapper-no4 .bird--20:after,
.wrapper-no4 .bird--20:before,
.wrapper-no4 .bird--21:after {
  left: 27px;
}
.wrapper-no4 .bird--2:before,
.wrapper-no4 .bird--5:before,
.wrapper-no4 .bird--8:before,
.wrapper-no4 .bird--11:before,
.wrapper-no4 .bird--14:before,
.wrapper-no4 .bird--17:before,
.wrapper-no4 .bird--20:before {
  top: -36px;
  left: 12px;
}
.wrapper-no4 .bird--21:before,
.wrapper-no4 .bird--22:before,
.wrapper-no4 .bird--23:before,
.wrapper-no4 .bird--24:before,
.wrapper-no4 .bird--25:before,
.wrapper-no4 .bird--26:before {
  top: 10px;
  left: 45px;
}
.wrapper-no4 .bird--21:after,
.wrapper-no4 .bird--22:after,
.wrapper-no4 .bird--23:after,
.wrapper-no4 .bird--24:after,
.wrapper-no4 .bird--25:after,
.wrapper-no4 .bird--26:after,
.wrapper-no4 .bird--27:after,
.wrapper-no4 .bird--28:after,
.wrapper-no4 .bird--29:after {
  left: 10px;
  top: 4px;
}
.wrapper-no4 .bird--27:before,
.wrapper-no4 .bird--28:before,
.wrapper-no4 .bird--29:before {
  left: -45px;
  top: 10px;
}
.wrapper-no4 .bird:before,
.wrapper-no4 .bird:after,
.wrapper-no4 .bird--1:after,
.wrapper-no4 .bird--1:before,
.wrapper-no4 .bird--2:before,
.wrapper-no4 .bird--2:after,
.wrapper-no4 .bird--3:after,
.wrapper-no4 .bird--3:before,
.wrapper-no4 .bird--4:after,
.wrapper-no4 .bird--4:before,
.wrapper-no4 .bird--5:after,
.wrapper-no4 .bird--5:before,
.wrapper-no4 .bird--6:after,
.wrapper-no4 .bird--6:before,
.wrapper-no4 .bird--7:after,
.wrapper-no4 .bird--7:before,
.wrapper-no4 .bird--8:after,
.wrapper-no4 .bird--8:before,
.wrapper-no4 .bird--9:after,
.wrapper-no4 .bird--9:before,
.wrapper-no4 .bird--10:after,
.wrapper-no4 .bird--10:before,
.wrapper-no4 .bird--11:after,
.wrapper-no4 .bird--11:before,
.wrapper-no4 .bird--12:after,
.wrapper-no4 .bird--12:before,
.wrapper-no4 .bird--13:after,
.wrapper-no4 .bird--13:before,
.wrapper-no4 .bird--14:after,
.wrapper-no4 .bird--14:before,
.wrapper-no4 .bird--15:after,
.wrapper-no4 .bird--15:before,
.wrapper-no4 .bird--16:after,
.wrapper-no4 .bird--16:before,
.wrapper-no4 .bird--17:after,
.wrapper-no4 .bird--17:before,
.wrapper-no4 .bird--18:after,
.wrapper-no4 .bird--18:before,
.wrapper-no4 .bird--19:after,
.wrapper-no4 .bird--19:before,
.wrapper-no4 .bird--20:after,
.wrapper-no4 .bird--20:before,
.wrapper-no4 .bird--21:after,
.wrapper-no4 .bird--21:before,
.wrapper-no4 .bird--22:after,
.wrapper-no4 .bird--22:before,
.wrapper-no4 .bird--23:after,
.wrapper-no4 .bird--23:before,
.wrapper-no4 .bird--24:after,
.wrapper-no4 .bird--24:before,
.wrapper-no4 .bird--25:after,
.wrapper-no4 .bird--25:before,
.wrapper-no4 .bird--26:after,
.wrapper-no4 .bird--26:before,
.wrapper-no4 .bird--27:after,
.wrapper-no4 .bird--27:before,
.wrapper-no4 .bird--28:after,
.wrapper-no4 .bird--28:before,
.wrapper-no4 .bird--29:after,
.wrapper-no4 .bird--29:before,
.wrapper-no4 .bird--30:after,
.wrapper-no4 .bird--30:before {
  content: "";
}
.wrapper-no4 .bird:before,
.wrapper-no4 .bird--3:before,
.wrapper-no4 .bird--12:before,
.wrapper-no4 .bird--15:before,
.wrapper-no4 .bird--6:before,
.wrapper-no4 .bird--9:before,
.wrapper-no4 .bird--18:before {
  top: 10px;
}
.wrapper-no4 .bird:after,
.wrapper-no4 .bird--6:after,
.wrapper-no4 .bird--12:after,
.wrapper-no4 .bird--15:after,
.wrapper-no4 .bird--9:after,
.wrapper-no4 .bird--18:after {
  top: 35px;
}
.wrapper-no4 .bird--3:after {
  left: -10px;
}
.wrapper-no4 .bird--3:after {
  top: 40px;
}
.wrapper-no4 .bird--1,
.wrapper-no4 .bird--4,
.wrapper-no4 .bird--7,
.wrapper-no4 .bird--10,
.wrapper-no4 .bird--13,
.wrapper-no4 .bird--16,
.wrapper-no4 .bird--19 {
  top: 25px;
}
.wrapper-no4 .bird--2 {
  top: 45px;
}
.wrapper-no4 .bird--5 {
  top: 47px;
  left: 25px;
}
.wrapper-no4 .bird--8,
.wrapper-no4 .bird--11,
.wrapper-no4 .bird--14,
.wrapper-no4 .bird--17,
.wrapper-no4 .bird--20 {
  top: 50px;
}
.wrapper-no4 .bird--3,
.wrapper-no4 .bird--4 {
  left: 59px;
}
.wrapper-no4 .bird--6,
.wrapper-no4 .bird--7,
.wrapper-no4 .bird--8 {
  left: 118px;
}
.wrapper-no4 .bird--9,
.wrapper-no4 .bird--10,
.wrapper-no4 .bird--11 {
  left: 177px;
}
.wrapper-no4 .bird--12,
.wrapper-no4 .bird--13,
.wrapper-no4 .bird--14 {
  left: 236px;
}
.wrapper-no4 .bird--15,
.wrapper-no4 .bird--16,
.wrapper-no4 .bird--17 {
  left: 206.5px;
}
.wrapper-no4 .bird--20 {
  left: 108px;
}
.wrapper-no4 .bird--18,
.wrapper-no4 .bird--19 {
  left: 137.5px;
}
.wrapper-no4 .bird--30,
.wrapper-no4 .bird--30:after,
.wrapper-no4 .bird--30:before {
  left: 118px;
  top: 0;
}
.wrapper-no4 .bird--30:before {
  top: 25px;
}
.wrapper-no4 .bird--30:after {
  top: 20px;
}
.wrapper-no4 .active .bird,
.wrapper-no4 .active .bird:before,
.wrapper-no4 .active .bird--3,
.wrapper-no4 .active .bird--4,
.wrapper-no4 .active .bird--4:after,
.wrapper-no4 .active .bird--4:before,
.wrapper-no4 .active .bird--9,
.wrapper-no4 .active .bird--9:after,
.wrapper-no4 .active .bird--13,
.wrapper-no4 .active .bird--13:after,
.wrapper-no4 .active .bird--13:before,
.wrapper-no4 .active .bird--15,
.wrapper-no4 .active .bird--16,
.wrapper-no4 .active .bird--18,
.wrapper-no4 .active .bird--21,
.wrapper-no4 .active .bird--21:after,
.wrapper-no4 .active .bird--27:before,
.wrapper-no4 .active .bird--24,
.wrapper-no4 .active .bird--24:after,
.wrapper-no4 .active .bird--24:before,
.wrapper-no4 .active .bird--27,
.wrapper-no4 .active .bird--27:after,
.wrapper-no4 .active .bird--27:before,
.wrapper-no4 .active .bird--30:before,
.wrapper-no4 .button-bird:hover .bird,
.wrapper-no4 .button-bird:hover .bird:before,
.wrapper-no4 .button-bird:hover .bird--3,
.wrapper-no4 .button-bird:hover .bird--4,
.wrapper-no4 .button-bird:hover .bird--4:after,
.wrapper-no4 .button-bird:hover .bird--4:before,
.wrapper-no4 .button-bird:hover .bird--9,
.wrapper-no4 .button-bird:hover .bird--9:after,
.wrapper-no4 .button-bird:hover .bird--13,
.wrapper-no4 .button-bird:hover .bird--13:after,
.wrapper-no4 .button-bird:hover .bird--13:before,
.wrapper-no4 .button-bird:hover .bird--15,
.wrapper-no4 .button-bird:hover .bird--16,
.wrapper-no4 .button-bird:hover .bird--18,
.wrapper-no4 .button-bird:hover .bird--21,
.wrapper-no4 .button-bird:hover .bird--21:after,
.wrapper-no4 .button-bird:hover .bird--27:before,
.wrapper-no4 .button-bird:hover .bird--24,
.wrapper-no4 .button-bird:hover .bird--24:after,
.wrapper-no4 .button-bird:hover .bird--24:before,
.wrapper-no4 .button-bird:hover .bird--27,
.wrapper-no4 .button-bird:hover .bird--27:after,
.wrapper-no4 .button-bird:hover .bird--27:before,
.wrapper-no4 .button-bird:hover .bird--30:before {
  -webkit-animation-duration: 0.5s;
          animation-duration: 0.5s;
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s;
}
.wrapper-no4 .active .bird--1,
.wrapper-no4 .active .bird--1:after,
.wrapper-no4 .active .bird--3:before,
.wrapper-no4 .active .bird--5,
.wrapper-no4 .active .bird--5:after,
.wrapper-no4 .active .bird--5:before,
.wrapper-no4 .active .bird--7,
.wrapper-no4 .active .bird--7:after,
.wrapper-no4 .active .bird--7:before,
.wrapper-no4 .active .bird--9:before,
.wrapper-no4 .active .bird--10,
.wrapper-no4 .active .bird--10:after,
.wrapper-no4 .active .bird--10:before,
.wrapper-no4 .active .bird--14,
.wrapper-no4 .active .bird--14:after,
.wrapper-no4 .active .bird--14:before,
.wrapper-no4 .active .bird--17,
.wrapper-no4 .active .bird--17:after,
.wrapper-no4 .active .bird--17:before,
.wrapper-no4 .active .bird--19,
.wrapper-no4 .active .bird--19:after,
.wrapper-no4 .active .bird--19:before,
.wrapper-no4 .active .bird--18:after,
.wrapper-no4 .active .bird--22,
.wrapper-no4 .active .bird--22:after,
.wrapper-no4 .active .bird--22:before,
.wrapper-no4 .active .bird--25,
.wrapper-no4 .active .bird--25:after,
.wrapper-no4 .active .bird--25:before,
.wrapper-no4 .active .bird--28,
.wrapper-no4 .active .bird--28:after,
.wrapper-no4 .active .bird--28:before,
.wrapper-no4 .active .bird--30:after,
.wrapper-no4 .button-bird:hover .bird--1,
.wrapper-no4 .button-bird:hover .bird--1:after,
.wrapper-no4 .button-bird:hover .bird--3:before,
.wrapper-no4 .button-bird:hover .bird--5,
.wrapper-no4 .button-bird:hover .bird--5:after,
.wrapper-no4 .button-bird:hover .bird--5:before,
.wrapper-no4 .button-bird:hover .bird--7,
.wrapper-no4 .button-bird:hover .bird--7:after,
.wrapper-no4 .button-bird:hover .bird--7:before,
.wrapper-no4 .button-bird:hover .bird--9:before,
.wrapper-no4 .button-bird:hover .bird--10,
.wrapper-no4 .button-bird:hover .bird--10:after,
.wrapper-no4 .button-bird:hover .bird--10:before,
.wrapper-no4 .button-bird:hover .bird--14,
.wrapper-no4 .button-bird:hover .bird--14:after,
.wrapper-no4 .button-bird:hover .bird--14:before,
.wrapper-no4 .button-bird:hover .bird--17,
.wrapper-no4 .button-bird:hover .bird--17:after,
.wrapper-no4 .button-bird:hover .bird--17:before,
.wrapper-no4 .button-bird:hover .bird--19,
.wrapper-no4 .button-bird:hover .bird--19:after,
.wrapper-no4 .button-bird:hover .bird--19:before,
.wrapper-no4 .button-bird:hover .bird--18:after,
.wrapper-no4 .button-bird:hover .bird--22,
.wrapper-no4 .button-bird:hover .bird--22:after,
.wrapper-no4 .button-bird:hover .bird--22:before,
.wrapper-no4 .button-bird:hover .bird--25,
.wrapper-no4 .button-bird:hover .bird--25:after,
.wrapper-no4 .button-bird:hover .bird--25:before,
.wrapper-no4 .button-bird:hover .bird--28,
.wrapper-no4 .button-bird:hover .bird--28:after,
.wrapper-no4 .button-bird:hover .bird--28:before,
.wrapper-no4 .button-bird:hover .bird--30:after {
  -webkit-animation-duration: 0.7s;
          animation-duration: 0.7s;
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s;
}
.wrapper-no4 .active .bird:after,
.wrapper-no4 .active .bird--1:before,
.wrapper-no4 .active .bird--2,
.wrapper-no4 .active .bird--2:before,
.wrapper-no4 .active .bird--2:after,
.wrapper-no4 .active .bird--3:after,
.wrapper-no4 .active .bird--6,
.wrapper-no4 .active .bird--6:after,
.wrapper-no4 .active .bird--6:before,
.wrapper-no4 .active .bird--8,
.wrapper-no4 .active .bird--8:after,
.wrapper-no4 .active .bird--8:before,
.wrapper-no4 .active .bird--11,
.wrapper-no4 .active .bird--11:after,
.wrapper-no4 .active .bird--11:before,
.wrapper-no4 .active .bird--12,
.wrapper-no4 .active .bird--12:after,
.wrapper-no4 .active .bird--12:before,
.wrapper-no4 .active .bird--16,
.wrapper-no4 .active .bird--16:after,
.wrapper-no4 .active .bird--16:before,
.wrapper-no4 .active .bird--20,
.wrapper-no4 .active .bird--20:after,
.wrapper-no4 .active .bird--20:before,
.wrapper-no4 .active .bird--18:before,
.wrapper-no4 .active .bird--23,
.wrapper-no4 .active .bird--23:after,
.wrapper-no4 .active .bird--23:before,
.wrapper-no4 .active .bird--26,
.wrapper-no4 .active .bird--26:after,
.wrapper-no4 .active .bird--26:before,
.wrapper-no4 .active .bird--29,
.wrapper-no4 .active .bird--29:after,
.wrapper-no4 .active .bird--29:before,
.wrapper-no4 .active .bird--30,
.wrapper-no4 .button-bird:hover .bird:after,
.wrapper-no4 .button-bird:hover .bird--1:before,
.wrapper-no4 .button-bird:hover .bird--2,
.wrapper-no4 .button-bird:hover .bird--2:before,
.wrapper-no4 .button-bird:hover .bird--2:after,
.wrapper-no4 .button-bird:hover .bird--3:after,
.wrapper-no4 .button-bird:hover .bird--6,
.wrapper-no4 .button-bird:hover .bird--6:after,
.wrapper-no4 .button-bird:hover .bird--6:before,
.wrapper-no4 .button-bird:hover .bird--8,
.wrapper-no4 .button-bird:hover .bird--8:after,
.wrapper-no4 .button-bird:hover .bird--8:before,
.wrapper-no4 .button-bird:hover .bird--11,
.wrapper-no4 .button-bird:hover .bird--11:after,
.wrapper-no4 .button-bird:hover .bird--11:before,
.wrapper-no4 .button-bird:hover .bird--12,
.wrapper-no4 .button-bird:hover .bird--12:after,
.wrapper-no4 .button-bird:hover .bird--12:before,
.wrapper-no4 .button-bird:hover .bird--16,
.wrapper-no4 .button-bird:hover .bird--16:after,
.wrapper-no4 .button-bird:hover .bird--16:before,
.wrapper-no4 .button-bird:hover .bird--20,
.wrapper-no4 .button-bird:hover .bird--20:after,
.wrapper-no4 .button-bird:hover .bird--20:before,
.wrapper-no4 .button-bird:hover .bird--18:before,
.wrapper-no4 .button-bird:hover .bird--23,
.wrapper-no4 .button-bird:hover .bird--23:after,
.wrapper-no4 .button-bird:hover .bird--23:before,
.wrapper-no4 .button-bird:hover .bird--26,
.wrapper-no4 .button-bird:hover .bird--26:after,
.wrapper-no4 .button-bird:hover .bird--26:before,
.wrapper-no4 .button-bird:hover .bird--29,
.wrapper-no4 .button-bird:hover .bird--29:after,
.wrapper-no4 .button-bird:hover .bird--29:before,
.wrapper-no4 .button-bird:hover .bird--30 {
  -webkit-animation-duration: 0.6s;
          animation-duration: 0.6s;
  -webkit-animation-delay: -0.75s;
          animation-delay: -0.75s;
}
@-webkit-keyframes fly-cycle {
  100% {
    background-position: -360px 0;
  }
}
@keyframes fly-cycle {
  100% {
    background-position: -360px 0;
  }
}
@-webkit-keyframes text-fade {
  0% {
    color: transparent;
    opacity: 1;
    top: -50%;
    left: auto;
  }
  1% {
    color: transparent;
    opacity: 0;
  }
  50% {
    color: transparent;
    opacity: 0;
  }
  100% {
    color: #131335;
    opacity: 1;
  }
}
@keyframes text-fade {
  0% {
    color: transparent;
    opacity: 1;
    top: -50%;
    left: auto;
  }
  1% {
    color: transparent;
    opacity: 0;
  }
  50% {
    color: transparent;
    opacity: 0;
  }
  100% {
    color: #131335;
    opacity: 1;
  }
}
@-webkit-keyframes feather-fade {
  0% {
    top: -100px;
    opacity: 0;
  }
  25% {
    transform: rotate(10deg);
    left: 30%;
  }
  50% {
    transform: rotate(-5deg);
    opacity: 1;
    left: 45%;
  }
  75% {
    transform: rotate(10deg);
    left: 32%;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
    top: 12px;
    left: 43%;
  }
}
@keyframes feather-fade {
  0% {
    top: -100px;
    opacity: 0;
  }
  25% {
    transform: rotate(10deg);
    left: 30%;
  }
  50% {
    transform: rotate(-5deg);
    opacity: 1;
    left: 45%;
  }
  75% {
    transform: rotate(10deg);
    left: 32%;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
    top: 12px;
    left: 43%;
  }
}
    </style>
</head>
<body>
<div class="wrapper-no4">
    <button class="button-bird">
        <p class="button-bird__text">SEND</p>
        <svg version="1.1" class="feather" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 75 38" style="enable-background:new 0 0 75 38;" xml:space="preserve">
        <g>
            <path d="M20.8,31.6c3.1-0.7,2.9-2.3,2,1c9.1,4.4,20.4,3.7,29.1-0.8l0,0c0.7-2.1,1-3.9,1-3.9c0.6,0.8,0.8,1.7,1,2.9
                c4.1-2.3,7.6-5.3,10.2-8.3c0.4-2.2,0.4-4,0.4-4.1c0.6,0.4,0.9,1.2,1.2,2.1c4.5-6.1,5.4-11.2,3.7-13.5c1.1-2.6,1.6-5.4,1.2-7.7
                c-0.5,2.4-1.2,4.7-2.1,7.1c-5.8,11.5-16.9,21.9-30.3,25.3c13-4,23.6-14.4,29.1-25.6C62.8,9,55.6,16.5,44.7,20.7
                c2.1,0.7,3.5,1.1,3.5,1.6c-0.1,0.4-1.3,0.6-3.2,0.4c-7-0.9-7.1,1.2-16,1.5c1,1.3,2,2.5,3.1,3.6c-1.9-0.9-3.8-2.2-5.6-3.6
                c-0.9,0.1-10.3,4.9-22.6-12.3C5.9,17.7,11.8,26.9,20.8,31.6z"/>
        </g>
        </svg>
        <span class="bird"></span>
        <span class="bird--1"></span>
        <span class="bird--2"></span>
        <span class="bird--3"></span>
        <span class="bird--4"></span>
        <span class="bird--5"></span>
        <span class="bird--6"></span>
        <span class="bird--7"></span>
        <span class="bird--8"></span>
        <span class="bird--9"></span>
        <span class="bird--10"></span>
        <span class="bird--11"></span>
        <span class="bird--12"></span>
        <span class="bird--13"></span>
        <span class="bird--14"></span>
        <span class="bird--15"></span>
        <span class="bird--16"></span>
        <span class="bird--17"></span>
        <span class="bird--18"></span>
        <span class="bird--19"></span>
        <span class="bird--20"></span>
        <span class="bird--21"></span>
        <span class="bird--22"></span>
        <span class="bird--23"></span>
        <span class="bird--24"></span>
        <span class="bird--25"></span>
        <span class="bird--26"></span>
        <span class="bird--27"></span>
        <span class="bird--28"></span>
        <span class="bird--29"></span>
        <span class="bird--30"></span>
    </button>
 </div>
 <script>
    document.addEventListener("DOMContentLoaded", function(){
      var el = document.querySelector(".button-bird");
      var text = document.querySelector(".button-bird__text");
          el.addEventListener('click', function() {
            el.classList.toggle('active');

            if(el.classList.contains('active')){
            	console.log('true');
            	text.innerHTML = 'DONE';
            }else{
            	text.innerHTML = 'SEND';
            }
        });
    });
 </script>
</body>
</html>