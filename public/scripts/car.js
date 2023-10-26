class Car extends Component {
  static list = [];

  static init(cars) {
    this.list = cars.map((i) => new this(i));
  }

  constructor({
    id,
    plate,
    manufacture,
    model,
    image,
    rentPerDay,
    capacity,
    description,
    transmission,
    available,
    type,
    year,
    options,
    specs,
    availableAt,
  }) {
    this.id = id;
    this.plate = plate;
    this.manufacture = manufacture;
    this.model = model;
    this.image = image;
    this.rentPerDay = rentPerDay;
    this.capacity = capacity;
    this.description = description;
    this.transmission = transmission;
    this.available = available;
    this.type = type;
    this.year = year;
    this.options = options;
    this.specs = specs;
    this.availableAt = availableAt;
  }

  render() {
    return `
      <div class="card" style="width: 18rem;">
        <img src="${this.image}" class="card-img-top" alt="">
        <div class="card-body">
          <!-- <h5 class="card-title">Card title</h5> -->
          <p class="card-text">${this.manufacture}/${this.model}</p>
          <p class="card-text">Rp ${this.rentPerDay} / hari</p>
          <p class="card-text">${this.description}</p>
          <p class="card-text"><i data-feather="users"></i>${this.capacity} orang</p>
          <p class="card-text"><i data-feather="settings"></i>${this.transmission}</p>
          <p class="card-text"><i data-feather="calendar"></i>Tahun ${this.year}</p>
          <a href="#" class="btn btn-green">Pilih Mobil</a>
        </div>
      </div>
    `;
  }
  // render() {
  //   return `
  //     <p>id: <b>${this.id}</b></p>
  //     <p>plate: <b>${this.plate}</b></p>
  //     <p>manufacture: <b>${this.manufacture}</b></p>
  //     <p>model: <b>${this.model}</b></p>
  //     <p>available at: <b>${this.availableAt}</b></p>
  //     <img src="${this.image}" alt="${this.manufacture}" width="64px">
  //   `;
  // }
}
