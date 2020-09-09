import React, { useState } from 'react';
import { View, Text} from 'react-native';
import { ScrollView, TextInput, BorderlessButton, RectButton } from 'react-native-gesture-handler';
import { Feather} from '@expo/vector-icons';

import PageHeader from '../../components/PageHeader';
import TeacherItem, { Teacher } from '../../components/TeacherItem';

import styles from './styles';
import api from '../../services/api';

function TeacherList(){
    const [teachers, setTeachers] = useState([]);

    const [isFiltersVisible, setIsFiltersVisible] = useState(false);

    const [subject, setSubject] = useState('');
    const [week_day,setWeekDay] = useState('');
    const [time,setTime] = useState('');

    function handleToggleFiltersVisible(){
        setIsFiltersVisible(!isFiltersVisible);
    }
    
    async function handleFilterSubmit(){
        const response = await api.get('classes',{
            params: {
                subject,
                week_day,
                time,
            }
        });
        setIsFiltersVisible(false);
        setTeachers(response.data);
    }
    return(
        <View style={styles.container}>
            <PageHeader 
                title="Proffys disponíveis" 
                headerRight={(
                    <BorderlessButton onPress={handleToggleFiltersVisible}>
                        <Feather name="filter" size={24} color="#FFF"/>
                    </BorderlessButton>
                )}>


            {isFiltersVisible &&(
                <View style={styles.searchForm}>
                    <Text style={styles.label}>Matéria</Text>
                    <TextInput style={styles.input} 
                        placeholder="Qual a matéria?"
                        value={subject}
                        onChangeText={text => setSubject(text)}
                        placeholderTextColor="#c1bccc"/>

                    <View style={styles.inputGroup}>
                        <View style={styles.inputBlock}>
                            <Text style={styles.label}>Dia da semana</Text>
                            <TextInput style={styles.input}
                                placeholder="Qual o dia?"
                                value={week_day}
                                onChangeText={text => setWeekDay(text)}
                                placeholderTextColor="#c1bccc"/>
                        </View>

                        <View style={styles.inputBlock}>
                            <Text style={styles.label}>Horário</Text>
                            <TextInput style={styles.input} 
                                placeholder="Qual o horário?"
                                value = {time}
                                onChangeText={text => setTime(text)}
                                placeholderTextColor="#c1bccc"/>
                        </View>
                    </View>
                    <RectButton onPress={handleFilterSubmit} style={styles.submitButton}>
                        <Text style={styles.submitButtonText}>Filtrar</Text>
                    </RectButton>
                </View>
            )}
            </PageHeader>
            
            <ScrollView 
                style={styles.teacherList} 
                contentContainerStyle={{paddingHorizontal:16,
                paddingBottom:16}}>

                {teachers.map((teacher: Teacher ) => {return <TeacherItem key={teacher.id} teacher={teacher} />})}
                
            </ScrollView>
        </View>
    );
}

export default TeacherList;