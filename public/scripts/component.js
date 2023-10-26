class Component {
  constructor() {
    if (this.constructor === Component) {
      throw new Error("Cannot instantiate from Absract Class");
    }
  }



  render() {
    throw new Error("Absract Method not implemented");
  }
}
