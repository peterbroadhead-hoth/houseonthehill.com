<div class='demo-container'>
    <div class='carousel'>
      <input checked='checked' class='carousel__activator' id='carousel-slide-activator-1' name='carousel' type='radio'>
      <input class='carousel__activator' id='carousel-slide-activator-2' name='carousel' type='radio'>
      <input class='carousel__activator' id='carousel-slide-activator-3' name='carousel' type='radio'>
      <div class='carousel__controls'>
        <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-2'>
          👉
        </label>
        <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-1'>
          👈
        </label>
        <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-3'>
          👉
        </label>
      </div>
      <div class='carousel__controls'>
        <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-2'>
          👈
        </label>
      </div>
      <div class='carousel__screen'>
        <div class='carousel__track'>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              a
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              b
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              c
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              d
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              e
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              f
            </div>
          </div>
          <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
            <div class='demo-content'>
              g
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.carousel {
  min-width: 900px;
  max-width: 1236px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 48px;
  padding-right: 48px;
  position: relative;
}

.carousel__activator {
  display: none;
}

.carousel__controls {
  display: none;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  top: 0;
  right: 16px;
  left: 16px;
  bottom: 0;
}
.carousel__controls:first-of-type {
  justify-content: flex-end;
}
.carousel__controls:last-of-type {
  justify-content: flex-start;
}

.carousel__control {
  cursor: pointer;
  display: flex;
  align-items: center;
  background-color: #fff;
  color: #3d414a;
  border-radius: 100%;
  box-shadow: 0 2px 10px 0 rgba(33, 34, 36, 0.3);
  font-size: 24px;
  height: 48px;
  justify-content: center;
  transition: 0.3s all;
  width: 48px;
  z-index: 1;
}
.carousel__control:hover {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}

.carousel__activator:nth-of-type(1):checked
~ .carousel__controls:nth-of-type(1) {
  display: flex;
}

.carousel__activator:nth-of-type(1):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
}

.carousel__activator:nth-of-type(2):checked
~ .carousel__controls:nth-of-type(2) {
  display: flex;
}

.carousel__activator:nth-of-type(2):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.carousel__activator:nth-of-type(3):checked
~ .carousel__controls:nth-of-type(3) {
  display: flex;
}

.carousel__activator:nth-of-type(3):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-200%);
          transform: translateX(-200%);
}

.carousel__screen {
  overflow: hidden;
  margin-left: -16px;
  margin-right: -16px;
}

.carousel__track {
  font-size: 0;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.carousel__item {
  display: inline-flex;
  padding-left: 16px;
  padding-right: 16px;
  vertical-align: top;
  white-space: normal;
}

.carousel__item--desktop-in-1 {
  width: 100%;
}

.carousel__item--desktop-in-2 {
  width: 50%;
}

.carousel__item--desktop-in-3 {
  width: 33.3333333333%;
}

.carousel__item--desktop-in-4 {
  width: 25%;
}

.carousel__item--desktop-in-5 {
  width: 20%;
}



.demo-content {
  color: #fff;
  display: flex;
  font-family: Helvetica;
  font-weight: 100;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
  border-radius: 3px;
  font-size: 56px;
  height: 250px;
  width: 100%;
}

.carousel__item:nth-child(1) .demo-content {
  background-color: #216485;
}

.carousel__item:nth-child(2) .demo-content {
  background-color: #3692b6;
}

.carousel__item:nth-child(3) .demo-content {
  background-color: #6fccc9;
}

.carousel__item:nth-child(4) .demo-content {
  background-color: #a6e3cf;
}

.carousel__item:nth-child(5) .demo-content {
  background-color: #aff0be;
}

.carousel__item:nth-child(6) .demo-content {
  background-color: #527059;
}

.carousel__item:nth-child(7) .demo-content {
  background-color: #243127;
}

@media screen and (max-width: 1023px) {
  .carousel {
    padding-left: 0;
    padding-right: 0;
  }

  .carousel__activator:nth-of-type(n):checked ~ .carousel__controls:nth-of-type(n) {
    display: none;
  }
  .carousel__activator:nth-of-type(n):checked ~ .carousel__screen .carousel__track {
    -webkit-transform: none;
            transform: none;
  }

  .carousel__screen {
    margin-left: 0;
    margin-right: 0;
  }

  .carousel__track {
    overflow-x: auto;
    width: auto;
    padding-left: 48px;
    padding-right: 48px;
  }

  .carousel__item--tablet-in-1 {
    width: 90%;
  }

  .carousel__item--tablet-in-2 {
    width: 45%;
  }

  .carousel__item--tablet-in-3 {
    width: 30%;
  }
}
@media screen and (max-width: 650px) {
  .carousel__track {
    padding-left: 0;
    padding-right: 0;
  }

  .carousel__item--mobile-in-1 {
    width: 90%;
  }

  .carousel__item--mobile-in-2 {
    width: 45%;
  }

  .carousel__item--mobile-in-3 {
    width: 30%;
  }
}
</style>