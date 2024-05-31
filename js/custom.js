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
    j = "max",
    r = "type";
  document.querySelectorAll(e).forEach((e) => {
    e.addEventListener(u, (e) => {
      const u = e.currentTarget,
        l = getData(u, r),
        c = u.closest(a).querySelector(n),
        o = c.getAttribute(i);
        max = c.getAttribute(j);
      let y = parseInt(c.value, 10);
      if("plus" === l) {
        if (y < max) {
          y += 1;
        } else {
          y;
        }
      } else if (y > o) {
        y -= 1;
      } 

      c.value = y;
    });
  });
}

quantityInit();
