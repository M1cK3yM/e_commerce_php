const camelize = (e) => {
  const t = e.replace(/[-_\s.]+(.)?/g, (e, t) => (t ? t.toUpperCase() : ""));
  return `${t.substr(0, 1).toLowerCase()}${t.substr(1)}`;
};

function getData(e, t) {
  try {
    return JSON.parse(e.dataset[camelize(t)]);
  } catch (o) {
    return e.dataset[camelize(t)];
  }
}

function quantityInit() {
  const e = "[data-quantity] [data-type]",
    a = "[data-quantity]",
    n = '[data-quantity] input[type="number"]',
    u = "click",
    i = "min",
    r = "type";
  document.querySelectorAll(e).forEach((e) => {
    e.addEventListener(u, (e) => {
      const u = e.currentTarget,
        l = getData(u, r),
        c = u.closest(a).querySelector(n),
        o = c.getAttribute(i);
      let y = parseInt(c.value, 10);
      "plus" === l ? (y += 1) : (y = y > o ? (y -= 1) : y), (c.value = y);
    });
  });
}

quantityInit();
console.log("here");
