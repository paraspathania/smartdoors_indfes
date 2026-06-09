import { useState, useEffect } from 'react';

const Carousel = () => {
  const slides = ['/felxi.svg', '/flexa.svg'];
  const [current, setCurrent] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrent(prev => (prev + 1) % slides.length);
    }, 4000);
    return () => clearInterval(timer);
  }, []);

  return (
    <div className="flexbanner">
      <img
        src={slides[current]}
        alt="Smartdoors Banner"
        style={{ width: '100%', height: '250px', display: 'block' }}
      />
    </div>
  );
};

export default Carousel;
