let flowerCount = 0;

document.addEventListener('DOMContentLoaded', function () {
  const flowers = document.querySelectorAll('img[id^="img"]');
  const basket = document.getElementById('basket');
  const basketStatus = document.getElementById('basketstat');

  flowers.forEach((flower) => {
    flower.addEventListener('click', function () {
      const flowerCopy = this.cloneNode(true);
      flowerCopy.style.width = '100px';

      basket.appendChild(flowerCopy);

      flowerCount++;

      basketStatus.textContent = `The flower basket currently contains ${flowerCount} flowers.`;
    });
  });

  const changeTextBtn = document.getElementById('chtext');
  const changeBackgroundBtn = document.getElementById('bccol');

  changeTextBtn.addEventListener('click', async function () {
    const target = document.getElementById('text1');
    const computed = window.getComputedStyle(target).color;
    let initial = '#000000';
    try {
      initial = rgbToHex(computed) || '#000000';
    } catch (e) {
      initial = '#000000';
    }
    const chosen = await showColorModal(initial, 'Pilih warna untuk teks');
    if (chosen) {
      target.style.color = chosen;
    }
  });
  changeBackgroundBtn.addEventListener('click', async function () {
    const target = document.getElementById('bd');
    const computed = window.getComputedStyle(target).backgroundColor;
    let initial = '#ffffff';
    try {
      initial = rgbToHex(computed) || '#ffffff';
    } catch (e) {
      initial = '#ffffff';
    }
    const chosen = await showColorModal(initial, 'Pilih warna untuk latar belakang');
    if (chosen) {
      target.style.backgroundColor = chosen;
    }
  });
});
function showColorModal(initialColor, message) {
  return new Promise((resolve) => {
    const overlay = document.createElement('div');
    overlay.style.position = 'fixed';
    overlay.style.left = '0';
    overlay.style.top = '0';
    overlay.style.right = '0';
    overlay.style.bottom = '0';
    overlay.style.background = 'rgba(0,0,0,0.4)';
    overlay.style.display = 'flex';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.zIndex = '10000';

    const modal = document.createElement('div');
    modal.style.background = '#fff';
    modal.style.padding = '16px';
    modal.style.borderRadius = '8px';
    modal.style.minWidth = '280px';
    modal.style.boxShadow = '0 2px 12px rgba(0,0,0,0.25)';

    const text = document.createElement('div');
    text.textContent = message || 'Pilih warna lalu klik OK';
    text.style.marginBottom = '10px';
    text.style.textAlign = 'center';

    const colorWrap = document.createElement('div');
    colorWrap.style.display = 'flex';
    colorWrap.style.justifyContent = 'center';
    colorWrap.style.marginBottom = '12px';

    const colorInput = document.createElement('input');
    colorInput.type = 'color';
    colorInput.value = initialColor || '#000000';
    colorInput.style.width = '72px';
    colorInput.style.height = '44px';
    colorInput.style.border = 'none';
    colorInput.style.padding = '0';

    colorWrap.appendChild(colorInput);

    const buttonsRow = document.createElement('div');
    buttonsRow.style.display = 'flex';
    buttonsRow.style.justifyContent = 'center';
    buttonsRow.style.gap = '12px';
    buttonsRow.style.marginTop = '6px';

    const okBtn = document.createElement('button');
    okBtn.type = 'button';
    okBtn.textContent = 'Oke';
    okBtn.style.padding = '6px 12px';

    const cancelBtn = document.createElement('button');
    cancelBtn.type = 'button';
    cancelBtn.textContent = 'Batal';
    cancelBtn.style.padding = '6px 12px';

    buttonsRow.appendChild(okBtn);
    buttonsRow.appendChild(cancelBtn);

    modal.appendChild(text);
    modal.appendChild(colorWrap);
    modal.appendChild(buttonsRow);
    overlay.appendChild(modal);
    document.body.appendChild(overlay);

    colorInput.focus();

    const cleanup = (value) => {
      try {
        document.body.removeChild(overlay);
      } catch (e) {}
      resolve(value);
    };

    okBtn.addEventListener('click', () => cleanup(colorInput.value));
    cancelBtn.addEventListener('click', () => cleanup(null));

    overlay.addEventListener('click', (ev) => {
      if (ev.target === overlay) cleanup(null);
    });

    const onKey = (ev) => {
      if (ev.key === 'Escape') {
        cleanup(null);
      }
    };
    document.addEventListener('keydown', onKey);

    const originalResolve = resolve;
    resolve = (v) => {
      document.removeEventListener('keydown', onKey);
      originalResolve(v);
    };
  });
}

function rgbToHex(rgb) {
  if (!rgb) return null;
  rgb = rgb.trim();
  if (rgb[0] === '#') {
    if (rgb.length === 4) {
      return '#' + rgb[1] + rgb[1] + rgb[2] + rgb[2] + rgb[3] + rgb[3];
    }
    return rgb;
  }
  const m = rgb.match(/rgba?\s*\((\d+),\s*(\d+),\s*(\d+)/i);
  if (m) {
    const r = parseInt(m[1], 10);
    const g = parseInt(m[2], 10);
    const b = parseInt(m[3], 10);
    return '#' + toHex(r) + toHex(g) + toHex(b);
  }
  return null;
}

function toHex(n) {
  const s = n.toString(16);
  return s.length === 1 ? '0' + s : s;
}
