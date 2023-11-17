import api from '@/service/api';

export async function getInfo() {
    const response = await api.get('/portfolio');
    return response.data[0];
}