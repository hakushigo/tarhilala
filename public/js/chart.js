const options = {
  chart: {
    type: 'bar',
    height: 350,
    width: '100%',
    toolbar: {
      show: false
    }
  },
  series: [
    {
      name: 'Amount',
      data: dataAmount
    }
  ],
  xaxis: {
    categories: dataCategories,
    labels: {
      style: {
        fontSize: '12px'
      }
    }
  },
  yaxis: {
    title: {
      text: '.Kg',
      style: {
        fontSize: '14px'
      }
    },
    labels: {
      style: {
        fontSize: '12px'
      }
    }
  },
  title: {
    text: 'Sampah Masuk',
    align: 'center',
    style: {
      fontSize: '16px'
    }
  }
};

// Memeriksa tahun saat ini
const currentYear = new Date().getFullYear();

// Memeriksa apakah tahun saat ini bukan tahun 2023
if (currentYear !== 2023) {
  // Menyembunyikan kategori bulan
  options.xaxis.categories = [];
}

const chart = new ApexCharts(document.querySelector('#chart'), options);
chart.render();
