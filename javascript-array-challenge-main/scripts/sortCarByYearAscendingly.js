function sortCarByYearAscendingly(cars) {
  // Sangat dianjurkan untuk console.log semua hal hehe
  console.log(cars);

  // Clone array untuk menghindari side-effect
  // Apa itu side effect?
  const result = [...cars];

  // Tulis code-mu disini
  // console.log(dummy.year);
  // for (let i = 0; i < result.length; i++) {
  //   let dummy = result[i];
  //   for (let j = i; j < result.length; j++) {
  //     const car = result[j];
  //     let carYear = car.year;
  //     let dummyYear = dummy.year;
  //     // console.log(carYear);
  //     // console.log(dummyYear);
  //     if (carYear < dummyYear) {
  //       // console.log("");
  //       dummy = car;
  //     }
  //   }
  //   console.log(dummy);
  //   resultASC.push(dummy);
  // }
  for (let i = 0; i < result.length; i++) {
    for (let j = 0; j < result.length - i - 1; j++) {
      if (result[j + 1].year < result[j].year) {
        [result[j], result[j+1]] = [result[j+1],result[j]]
      }
    }
  }

  // Rubah code ini dengan array hasil sorting secara ascending
  return result;
}
