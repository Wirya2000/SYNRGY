require("./car.js");
require("./binar.js");

class App {
  constructor() {
    // this.clearButton = document.getElementById("clear-btn");
    // this.loadButton = document.getElementById("load-btn");
    this.cariButton = document.getElementById("btn_cari");
    this.carContainerElement = document.getElementById("carContainerElement");
    // this.tipe_driver = document.getElementById('tipe_driver');
    // this.tanggal = document.getElementById('tanggal');
    // this.waktu = document.getElementById('waktu');
    // this.jumlah_penumpang = document.getElementById('jumlah_penumpang');
  }

  async init() {
    await this.load();

    // Register click listener
    // this.clearButton.onclick = this.clear;
    // this.loadButton.onclick = this.run;
    this.cariButton.onclick = this.cari;
  }

  run = () => {
    Car.list.forEach((car) => {
      const node = document.createElement("div");
      node.innerHTML = car.render();
      this.carContainerElement.appendChild(node);
    });
  };

  async load() {
    const cars = await Binar.listCars();
    Car.init(cars);
  }

  cari = () => {
    this.clear();
    this.load();
    this.run();
  }

  clear = () => {
    let child = this.carContainerElement.firstElementChild;

    while (child) {
      child.remove();
      child = this.carContainerElement.firstElementChild;
    }
  };
}
