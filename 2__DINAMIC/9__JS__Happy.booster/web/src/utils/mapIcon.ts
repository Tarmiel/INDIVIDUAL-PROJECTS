import Leaflet from 'leaflet';

import HappyLogo from '../images/LogoSorriso.svg';

const mapIcon = Leaflet.icon({
    iconUrl: HappyLogo,
  
    iconSize: [58, 68],
    iconAnchor: [29, 68],
    popupAnchor: [0, -60]
  })

  export default mapIcon;